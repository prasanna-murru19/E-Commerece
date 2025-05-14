<?php
include('../includes/db.php'); 

// Admin credentials
$adminEmail = 'prasanna@gmail.com'; 
$adminPassword = '1234'; 
$hashedPassword = password_hash($adminPassword, PASSWORD_DEFAULT);


$stmt = $conn->prepare("INSERT INTO users (email, password, role) VALUES (?, ?, 'admin')");
$stmt->execute([$adminEmail, $hashedPassword]);

echo "Admin user created successfully!";
?>
