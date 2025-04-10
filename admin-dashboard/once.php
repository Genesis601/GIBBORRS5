<?php
// Use this once to insert your admin (run this in a separate PHP file once)
require 'admin-db-con.php';

$username = 'admin';
$password = password_hash('admin111', PASSWORD_DEFAULT);

$stmt = $pdo->prepare("INSERT INTO admin (username, password) VALUES (?, ?)");
$stmt->execute([$username, $password]);

echo "Admin user created.";
