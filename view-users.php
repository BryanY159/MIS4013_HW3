<h1>Users</h1>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>UserID</th>
        <th>Username</th>
        <th>Subscription Type</th>
      </tr>
    </thead>
    <tbody>
      <?php
        while($user = $users->fetch_assoc()) {
          ?>
          <tr>
            <td><?php echo $user['UserID']; ?></td>
            <td><?php echo $user['Username']; ?></td>
            <td><?php echo $user['SubscriptionType']; ?></td>
          </tr>
          <?php
        }
      ?>
    </tbody>
  </table>
</div>
