<?php

class Reminders extends Controller {
    public function index() {
        $R = $this->model('Reminder');
        $list = $R->get_all_reminders();
        $this->view('reminders/index', ['reminders' => $list]);
        }
    public function create() {
        $this->view('reminders/create');
    }
    public function store() {
        $text = trim($_REQUEST['reminder'] ?? '');
        if ($text !== '') {
            $R = $this->model('Reminder');
            $R->create_reminder($text);
        }
        header('Location: /reminders');
        exit;
    }
    public function edit($id) {
        $R = $this->model('Reminder');
        $reminder = $R->get_reminder($id);
        if (!$reminder) {
            header('Location: /reminders');
            exit;
        }
        $this->view('reminders/edit', ['reminder' => $reminder]);
    }
    public function update($id) {
        $text = trim($_REQUEST['reminder'] ?? '');
        $R = $this->model('Reminder');
        $R->update_reminder($id, $text);
        header('Location: /reminders');
        exit;
    }
    public function delete($id) {
        $R = $this->model('Reminder');
        $R->delete_reminder($id);
        header('Location: /reminders');
        exit;
    }
}