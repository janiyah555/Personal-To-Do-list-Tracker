<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header('Location: ../login.php');
    exit;
}
include '../includes/db.php';
include '../includes/header.php';

$stmt = $pdo->prepare("SELECT * FROM tasks WHERE user_id = ?");
$stmt->execute([$_SESSION['user_id']]);
$tasks = $stmt->fetchAll();
?>

<main>
    <h2>My Tasks</h2>
    <a href="add_task.php">Add New Task</a><br><br>
    <table border="1" cellpadding="5">
        <tr>
            <th>Task</th>
            <th>Due Date</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        <?php foreach($tasks as $task): ?>
        <tr>
            <td><?= htmlspecialchars($task['task_name']) ?></td>
            <td><?= htmlspecialchars($task['due_date']) ?></td>
            <td><?= htmlspecialchars($task['status']) ?></td>
            <td>
                <a href="edit_task.php?id=<?= $task['id'] ?>">Edit</a> | 
                <a href="delete_task.php?id=<?= $task['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</main>

<?php include '../includes/footer.php'; ?>