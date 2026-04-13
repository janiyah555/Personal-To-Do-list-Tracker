<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header('Location: ../login.php');
    exit;
}
include '../includes/db.php';

$id = $_GET['id'] ?? '';
$stmt = $pdo->prepare("SELECT * FROM tasks WHERE id=? AND user_id=?");
$stmt->execute([$id, $_SESSION['user_id']]);
$task = $stmt->fetch();

if(!$task){
    die("Task not found");
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $task_name = $_POST['task_name'];
    $due_date = $_POST['due_date'];
    $status = $_POST['status'];

    $stmt = $pdo->prepare("UPDATE tasks SET task_name=?, due_date=?, status=? WHERE id=? AND user_id=?");
    $stmt->execute([$task_name, $due_date, $status, $id, $_SESSION['user_id']]);
    header('Location: dashboard.php');
    exit;
}

include '../includes/header.php';
?>

<main>
<h2>Edit Task</h2>
<form method="post">
    <label>Task Name: <input type="text" name="task_name" value="<?= htmlspecialchars($task['task_name']) ?>" required></label><br><br>
    <label>Due Date: <input type="date" name="due_date" value="<?= htmlspecialchars($task['due_date']) ?>"></label><br><br>
    <label>Status:
        <select name="status">
            <option value="Pending" <?= $task['status']=='Pending'?'selected':'' ?>>Pending</option>
            <option value="Completed" <?= $task['status']=='Completed'?'selected':'' ?>>Completed</option>
        </select>
    </label><br><br>
    <input type="submit" value="Update Task">
</form>
</main>

<?php include '../includes/footer.php'; ?>