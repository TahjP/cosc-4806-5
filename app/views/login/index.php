<div class="row justify-content-center">
	<div class="col-md-6 col-lg-5">
		<h2 class="mb-4 text-center">Login</h2>

		<?php if (isset($_SESSION['error_message'])): ?>
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<?= $_SESSION['error_message'] ?>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			<?php unset($_SESSION['error_message']); ?>
		<?php endif; ?>

		<form action="/login/verify" method="POST">
			<div class="mb-3">
				<label for="username" class="form-label">Username</label>
				<input type="text" class="form-control" id="username" name="username" required>
			</div>
			<div class="mb-3">
				<label for="password" class="form-label">Password</label>
				<input type="password" class="form-control" id="password" name="password" required>
			</div>
			<button type="submit" class="btn btn-primary w-100">Login</button>
		</form>
	</div>
</div>
