<div class="row justify-content-center">
  <div class="col-lg-8">
    <h2 class="mb-4">Total Logins by User</h2>

    <?php if (empty($data['loginStats'])): ?>
      <div class="alert alert-warning">No login data available.</div>
    <?php else: ?>
      <table class="table table-striped">
        <thead class="table-dark">
          <tr>
            <th>Username</th>
            <th>Total Logins</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data['loginStats'] as $user): ?>
            <tr>
              <td><?= htmlspecialchars($user['username']) ?></td>
              <td><?= htmlspecialchars($user['logins']) ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php endif; ?>
  </div>
</div>
