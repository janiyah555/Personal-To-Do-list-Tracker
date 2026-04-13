<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header('Location: ../login.php');
    exit;
}
include '../includes/db.php';

$id = $_GET['id'] ?? '';
$stmt = $pdo->prepare("DELETE FROM tasks WHERE id=? AND user_id=?");
$stmt->execute([$id, $_SESSION['user_id']]);

header('Location: dashboard.php');
exit;