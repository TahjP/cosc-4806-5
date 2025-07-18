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
    public function getTopUsers() {
        $stmt = $this->db->prepare("
            SELECT users.username, COUNT(reminders.id) AS count
            FROM reminders
            JOIN users ON reminders.user_id = users.id
            GROUP BY users.username
            ORDER BY count DESC
        ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
