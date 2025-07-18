<?php

class Reminder {

    public function __construct() {

    }

    public function get_all_reminders(): array {
        $db = db_connect();
        $statement = $db->prepare("SELECT * FROM reminders;");
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
    public function get_reminder($id): array|false {
        $db = db_connect();
        $statement = $db->prepare("SELECT * FROM reminders WHERE id = :id;");
        $statement->bindValue(':id', $id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
    public function create_reminder($text): int {
        $db = db_connect();
        $statement = $db->prepare("INSERT INTO reminders (reminder) VALUES (:reminder);");
        $statement->bindValue(':reminder', $text);
        $statement->execute();
        return (int)$db->lastInsertId();
    }

    public function update_reminder($id, $text, $complete = 0): int {
        $db = db_connect();
        $statement = $db->prepare("UPDATE reminders SET reminder = :reminder WHERE id = :id;");
        $statement->execute([
            ':reminder' => $text,
            ':id' => $id
        ]);
        return $statement->rowCount();
    }
    public function delete_reminder($id): int {
        $db = db_connect();
        $statement = $db->prepare("DELETE FROM reminders WHERE id = :id;");
        $statement->bindValue(':id', $id);
        $statement->execute();
        return $statement->rowCount();
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

?>