<?php
session_start();

if (!isset($_SESSION['todos'])) {
    $_SESSION['todos'] = [];
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title'] ?? '');

    if (empty($title)) {
        $error = "Task title cannot be empty.";
    } else {
        $_SESSION['todos'][] = [
            'title' => htmlspecialchars($title),
            'createdAt' => date('Y-m-d H:i:s'),
            'status' => 'Pending'
        ];
    }
}

if (isset($_POST['clear'])) {
    $_SESSION['todos'] = [];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple TODO App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
        }
        input[type="text"] {
            padding: 8px;
            width: 300px;
        }
        button {
            padding: 8px 12px;
        }
        .error {
            color: red;
            margin-top: 10px;
        }
        ul {
            padding-left: 0;
        }
        li {
            list-style-type: none;
            margin: 8px 0;
        }
    </style>
</head>
<body>

<h1>📝 Simple PHP TODO App</h1>

<form method="POST">
    <input type="text" name="title" placeholder="Enter a new task..." />
    <button type="submit">Add Task</button>
    <button type="submit" name="clear" value="1">Clear All</button>
</form>

<?php if ($error): ?>
    <p class="error"><?= $error ?></p>
<?php endif; ?>

<h2>Tasks</h2>
<ul>
    <?php foreach ($_SESSION['todos'] as $task): ?>
        <li>
            <strong><?= $task['title'] ?></strong><br>
            <small>Created at: <?= $task['createdAt'] ?> | Status: <?= $task['status'] ?></small>
        </li>
    <?php endforeach; ?>
    <?php if (empty($_SESSION['todos'])): ?>
        <li>No tasks added yet.</li>
    <?php endif; ?>
</ul>

</body>
</html>
