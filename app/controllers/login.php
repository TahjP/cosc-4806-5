<?php

class Login extends Controller {

		public function index() {
				$this->view('login/index');
		}

		public function verify() {
				$username = $_POST['username'];
				$password = $_POST['password'];

				$user = $this->model('User')->getByUsername($username);	// Retrieve user data from the database

				if ($user && password_verify($password, $user['password'])) {
						$_SESSION['auth'] = true;	// Set session variable to indicate successful login
						$_SESSION['username'] = $user['username']; // Store username in session
						$_SESSION['permissionId'] = $user['permissionId']; // Store permissionId in session
						header("Location: /reminders");
				} else {
						$_SESSION['error_message'] = "Invalid login credentials.";
						header("Location: /login");
				}
		}
} 
