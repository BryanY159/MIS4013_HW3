<h1> Test </h1>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>value</th>
        <th>value2</th>
        <th>Hyperlink Test</th>
      </tr>
    </thead>
    <tbody>
      <?php
        while($test_row = $test->fetch_assoc()) {
          ?>
          <tr>
            <td><?php echo $test_row['idtest']; ?></td>
            <td><?php echo $test_row['value']; ?></td>
            <td><?php echo $test_row['value2']; ?></td>
            <td><a href="test2-by-test.php?id=<?php echo $test_row['idtest'];?>">Test2</a></td>
          </tr>
          <?php
        }
      ?>
    </tbody>
  </table>
</div>
