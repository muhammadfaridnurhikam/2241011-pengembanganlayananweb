<?php
session_start();

class TodoList {
    private $tasks = [];

    // Constructor
    public function __construct() {
        if (!isset($_SESSION['tasks'])) {
            $_SESSION['tasks'] = [];
        }
        $this->tasks = $_SESSION['tasks'];
    }

    // Method untuk menambahkan task baru
    public function addTask($task) {
        $this->tasks[] = $task;
        $_SESSION['tasks'] = $this->tasks;
    }

    // Method untuk menampilkan semua tasks
    public function getTasks() {
        return $this->tasks;
    }

    // Method untuk menandai task sebagai selesai
    public function markTaskAsCompleted($taskIndex) {
        if (isset($this->tasks[$taskIndex])) {
            $this->tasks[$taskIndex] = "<s>" . $this->tasks[$taskIndex] . "</s>";
            $_SESSION['tasks'] = $this->tasks;
        }
    }

    // Method untuk menghapus task
    public function deleteTask($taskIndex) {
        if (isset($this->tasks[$taskIndex])) {
            array_splice($this->tasks, $taskIndex, 1);
            $_SESSION['tasks'] = $this->tasks;
        }
    }
}
?>
