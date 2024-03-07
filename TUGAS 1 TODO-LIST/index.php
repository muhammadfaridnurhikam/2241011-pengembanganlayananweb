<?php
require_once 'TodoList.php';

$todoList = new TodoList();

// Handle POST requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['addTask']) && !empty($_POST['task'])) {
        $todoList->addTask($_POST['task']);
    } elseif (isset($_POST['completeTask']) && isset($_POST['taskIndex'])) {
        $todoList->markTaskAsCompleted($_POST['taskIndex']);
    } elseif (isset($_POST['deleteTask']) && isset($_POST['taskIndex'])) {
        $todoList->deleteTask($_POST['taskIndex']);
    }
}

// View: Tampilan terpisah dari logika bisnis
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Todo List</h1>
    <form method="post">
        <input type="text" name="task" placeholder="Enter task...">
        <button type="submit" name="addTask">Add Task</button>
    </form>
    <ul>
        <?php foreach ($todoList->getTasks() as $index => $task): ?>
            <li><?php echo $task; ?>
                <form method="post" style="display: inline-block;">
                    <input type="hidden" name="taskIndex" value="<?php echo $index; ?>">
                    <button type="submit" name="completeTask">Complete</button>
                    <button type="submit" name="deleteTask">Delete</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
