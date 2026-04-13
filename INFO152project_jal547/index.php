<?php
session_start();
include 'includes/header.php';
?>

<main>
    <h1>Welcome to Your Personal To-Do List App</h1>

    <p>
        We all know that having tasks to complete is beyond stressful.
        But this website allows users to create, manage, and track their personal tasks.
        You must be logged in to add, edit, or delete tasks.
    </p>

    <?php if (isset($_SESSION['user_id'])): ?>
        <p>You are logged in.</p>
        <a href="pages/dashboard.php">Go to Dashboard</a><br><br>
        <a href="logout.php">Logout</a>
    <?php else: ?>
        <p>Please log in to manage your tasks.</p>
        <a href="login.php">Login</a>
    <?php endif; ?>
</main>

<?php
include 'includes/footer.php';
?>