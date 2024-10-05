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
        while($artist = $artists->fetch_assoc()) {
          ?>
          <tr>
            <td><?php echo $artist['ArtistID']; ?></td>
            <td><?php echo $artist['Name']; ?></td>
            <td><?php echo $artist['Genre']; ?></td>
          </tr>
          <?php
        }
      ?>
    </tbody>
  </table>
</div>
