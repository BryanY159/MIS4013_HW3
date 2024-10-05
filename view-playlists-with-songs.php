<h1>Playlists with Songs</h1>

<div class="card-group">
    <?php while($playlist = $playlists->fetch_assoc()) { ?>                                                 
      <div class="card">
        <div class="card-body">
          <h class="card-title"><?php echo $playlist['PlaylistName']; ?> /h>
          <p class="card-text">
            <ul class="list-group">
              <?php
                $songs = selectSongsByPlaylist($playlist['PlaylistName']);
                while ($song = $songs->fetch_assoc()) { ?>
                  <li class="list-group-item"><?php echo $song['SongID']; ?> - <?php echo $song['Title']; ?>?></li>
              <?php } ?>
            </ul>
          </p>
          <p class="card-text"><small class="text-body-secondary">Playlist ID: <?php echo $playlist['PlaylistID']; ?></small></p>
        </div>
      </div>
    <?php } ?>
</div>
