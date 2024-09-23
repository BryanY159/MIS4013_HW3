<h1> Test </h1>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>value</th>
        <th>value2</th>
      </tr>
    </thead>
    <tbody>
      <?php
        while($test = $test->fetch_assoc()) {
          ?>
          <tr>
            <td><?php echo $test['idtest']; ?></td>
            <td><?php echo $test['value']; ?></td>
            <td><?php echo $test['value2']; ?></td>
          </tr>
          <?php
        }
      ?>
    </tbody>
  </table>
</div>
