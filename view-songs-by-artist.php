<h1>Songs by Artist</h1>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>SongsID</th>
        <th>Title</th>
        <th>Genre</th>
        <th>Artist Name</th>
      </tr>
    </thead>
    <tbody>
      <?php
        while($song = $songs->fetch_assoc()) {
          ?>
          <tr>
            <td><?php echo $song['SongID']; ?></td>
            <td><?php echo $song['Title']; ?></td>
            <td><?php echo $song['Genre']; ?></td>
            <td><?php echo $song['Name']; ?></td>
          </tr>
          <?php
        }
      ?>
    </tbody>
  </table>
</div>
