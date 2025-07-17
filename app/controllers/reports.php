<?php

class Reports extends Controller {

    public function index() {
        // Check if user is logged in
        if (!isset($_SESSION['auth'])) {
            header("Location: /login");
            exit;
        }

        // Check if user is admin
        if ($_SESSION['permissionId'] != 1) {
            echo "<div class='alert alert-danger'>Access denied. Admins only.</div>";
            exit;
        }

        // If authorized, show the reports view
        $this->view('reports/index');
    }

}
