  <?php require_once 'app/views/templates/header.php' ?>
  <div class="container">
      <div class="page-header" id="banner">
          <div class="row">
              <div class="col-lg-12">
                  <h1>Edit Reminder</h1>
              </div>
          </div>
      </div>
      <form action="/reminders/update/<?= $data['reminder']['id'] ?>" method="post">
          <div class="form-group">
              <label for="reminder">Reminder</label>
              <input required type="text" class="form-control" name="reminder" value="<?= htmlspecialchars($data['reminder']['reminder']) ?>">
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Update</button>
          <a href="/reminders" class="btn btn-secondary mt-2">Back</a>
      </form>
  </div>
  <?php require_once 'app/views/templates/footer.php' ?>