<div class="row justify-content-center">
  <div class="col-lg-8">
    <h2 class="mb-4">Create New Reminder</h2>

    <?php if (isset($_SESSION['flash_message'])): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $_SESSION['flash_message'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <script>
        const toastContainer = document.createElement('div');
        toastContainer.className = 'toast-container position-fixed bottom-0 end-0 p-3';
        document.body.appendChild(toastContainer);

        const toastHTML = `
          <div class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
              <div class="toast-body">
                <?= $_SESSION['flash_message'] ?>
              </div>
              <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
          </div>`;

        toastContainer.innerHTML = toastHTML;
        new bootstrap.Toast(toastContainer.firstElementChild).show();
      </script>
      <?php unset($_SESSION['flash_message']); ?>
    <?php endif; ?>

    <?php if (isset($_SESSION['error_message'])): ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= $_SESSION['error_message'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php unset($_SESSION['error_message']); ?>
    <?php endif; ?>

    <form method="POST" action="/reminders/store">
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-pencil"></i></span>
          <input type="text" class="form-control" id="title" name="title" placeholder="e.g. Grocery List" required>
        </div>
      </div>

      <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea class="form-control" id="content" name="content" rows="4" placeholder="Add your reminder details here..." required></textarea>
      </div>

      <button type="submit" class="btn btn-success">Save Reminder</button>
    </form>
  </div>
</div>
