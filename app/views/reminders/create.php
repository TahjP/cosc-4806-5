<div class="row justify-content-center">
  <div class="col-lg-8">
    <h2 class="mb-4">Create New Reminder</h2>
    <form method="POST" action="/reminders/store">
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
      </div>
      <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea class="form-control" id="content" name="content" rows="4" required></textarea>
      </div>
      <button type="submit" class="btn btn-success">Save Reminder</button>
    </form>
  </div>
</div>
