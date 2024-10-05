<h1>Artists</h1>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ArtistID</th>
        <th>Name</th>
        <th>Genre</th>
      </tr>
    </thead>
    <tbody>
      <?php
        while($artist_row = $test->fetch_assoc()) {
          ?>
          <tr>
            <td><?php echo $artist_row['ArtistID']; ?></td>
            <td><?php echo $artist_row['Name']; ?></td>
            <td><?php echo $artist_row['Genre']; ?></td>
          </tr>
          <?php
        }
      ?>
    </tbody>
  </table>
</div>
