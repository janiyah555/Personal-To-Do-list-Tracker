<?php
session_start();
if(!isset($_SESSION['user_id'])){
   header('Location: ../login.php');
   exit;
}
include '../includes/db.php';

$errors = [];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
   $task_name = trim($_POST['task_name'] ?? '');
   $due_date = $_POST['due_date'] ?? '';
   $status = $_POST['status'] ?? 'Pending';

   // Server-side validation
   if(empty($task_name)){
       $errors[] = "Task name is required";
   }

   if(empty($errors)){
       try {
           $stmt = $pdo->prepare("INSERT INTO tasks (task_name, due_date, status, user_id) VALUES (?, ?, ?, ?)");
           $stmt->execute([$task_name, $due_date, $status, $_SESSION['user_id']]);
           header('Location: dashboard.php');  // Same folder, no ../pages/
           exit;
       } catch(PDOException $e) {
           $errors[] = "Database error: " . $e->getMessage();
       }
   }
}

include '../includes/header.php';
?>

<main>
<h2>Add Task</h2>

<?php if($errors): ?>
    <div style="color: red;">
        <?php foreach($errors as $error): ?>
            <p><?php echo htmlspecialchars($error); ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<form method="post" action="add_task.php">
   <label>Task Name: <input type="text" name="task_name" value="<?php echo htmlspecialchars($_POST['task_name'] ?? ''); ?>" required></label><br><br>
   <label>Due Date: <input type="date" name="due_date" value="<?php echo htmlspecialchars($_POST['due_date'] ?? ''); ?>"></label><br><br>
   <label>Status:
       <select name="status">
           <option value="Pending" <?php echo ($_POST['status'] ?? 'Pending') == 'Pending' ? 'selected' : ''; ?>>Pending</option>
           <option value="Completed" <?php echo ($_POST['status'] ?? '') == 'Completed' ? 'selected' : ''; ?>>Completed</option>
       </select>
   </label><br><br>
   <input type="submit" value="Add Task">
</form>
</main>

<?php include '../includes/footer.php'; ?>
