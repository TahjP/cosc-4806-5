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

      <canvas id="topUsersChart" height="300"></canvas>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script>
        const labels = <?= json_encode(array_column($data['topUsers'], 'username')) ?>;
        const data = {
          labels: labels,
          datasets: [{
            label: 'Reminders per User',
            data: <?= json_encode(array_column($data['topUsers'], 'count')) ?>,
            backgroundColor: 'rgba(54, 162, 235, 0.7)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
          }]
        };

        const config = {
          type: 'bar',
          data: data,
          options: {
            responsive: true,
            plugins: {
              legend: { display: false },
              title: {
                display: true,
                text: 'Top Users by Reminder Count'
              }
            },
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        };

        new Chart(
          document.getElementById('topUsersChart'),
          config
        );
      </script>
    <?php endif; ?>
  </div>
</div>
