<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Reminders</h1>
                <p> <a href="/reminders/create">Click here to create a new reminder</a></p>"
            </div>
        </div>
    </div>
    <?php if (!empty($data['reminders'])): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Reminder</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($data['reminders'] as $rem): ?>
                <tr>
                    <td><?= htmlspecialchars($rem['id']) ?></td>
                    <td><?= htmlspecialchars($rem['reminder'] ?? '') ?></td>
                    <td><?= htmlspecialchars($rem['reminder'] ?? '') ?></td>
                    <td>
                        <a href="/reminders/edit/<?= $rem['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                        <a href="/reminders/delete/<?= $rem['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this reminder?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No reminders found.</p>
    <?php endif; ?>
</div>

<?php require_once 'app/views/templates/footer.php' ?>