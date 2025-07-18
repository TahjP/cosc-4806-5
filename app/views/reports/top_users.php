<div class="row justify-content-center">
  <div class="col-lg-8">
    <h2 class="mb-4">Users with the Most Reminders</h2>

    <?php if (empty($data['topUsers'])): ?>
      <div class="alert alert-info">No data available.</div>
    <?php else: ?>
      <table class="table table-hover">
        <thead class="table-dark">
          <tr>
            <th>Username</th>
            <th>Reminder Count</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data['topUsers'] as $user): ?>
            <tr>
              <td><?= htmlspecialchars($user['username']) ?></td>
              <td><?= htmlspecialchars($user['count']) ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php endif; ?>
  </div>
</div>
