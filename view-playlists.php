<h1>Playlists</h1>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>PlaylistID</th>
        <th>UserID</th>
        <th>SongID</th>
        <th>Playlist Name</th>
      </tr>
    </thead>
    <tbody>
      <?php
    while($playlist = $playlists->fetch_assoc()) {
          ?>
          <tr>
            <td><?php echo $playlist['PlaylistID']; ?></td>
            <td><?php echo $playlist['UserID']; ?></td>
            <td><?php echo $playlist['SongID']; ?></td>
            <td><?php echo $playlist['PlaylistName']; ?></td>
          </tr>
          <?php
        }
      ?>
    </tbody>
  </table>
</div>
