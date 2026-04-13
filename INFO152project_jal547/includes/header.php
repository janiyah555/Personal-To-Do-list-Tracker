<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal To-Do List App</title>
    <link rel="stylesheet" href="/INFO152project_jal547/css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/INFO152project_jal547/index.php">Home</a></li>

                <?php if (isset($_SESSION['user_id'])): ?>
                    <li><a href="/INFO152project_jal547/pages/dashboard.php">Dashboard</a></li>
                    <li><a href="/INFO152project_jal547/pages/add_task.php">Add Task</a></li>
                    <li><a href="/INFO152project_jal547/logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="/INFO152project_jal547/login.php">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>