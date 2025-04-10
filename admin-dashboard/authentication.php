<?php
session_start();
require 'admin-db-con.php';

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$stmt = $pdo->prepare("SELECT * FROM admin WHERE username = ?");
$stmt->execute([$username]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
  $_SESSION['admin_logged_in'] = true;
  header("Location: admin-dashboard.php");
  exit;
} else {
  $_SESSION['error'] = "Invalid credentials.";
  header("Location: admin-login.php");
  exit;
}
