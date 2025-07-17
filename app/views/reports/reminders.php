<div class="row justify-content-center">
  <div class="col-lg-10">
    <h2 class="mb-4">All Reminders</h2>

    <?php if (empty($data['reminders'])): ?>
      <div class="alert alert-info">No reminders found.</div>
    <?php else: ?>
      <table class="table table-bordered table-striped">
        <thead class="table-dark">
          <tr>
            <th>User</th>
            <th>Title</th>
            <th>Content</th>
            <th>Created At</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data['reminders'] as $reminder): ?>
            <tr>
              <td><?= htmlspecialchars($reminder['username']) ?></td>
              <td><?= htmlspecialchars($reminder['title']) ?></td>
              <td><?= htmlspecialchars($reminder['content']) ?></td>
              <td><?= htmlspecialchars($reminder['created_at']) ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php endif; ?>
  </div>
</div>
