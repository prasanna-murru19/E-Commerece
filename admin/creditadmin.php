<?php
include('../includes/db.php'); // Include your database connection

// Admin credentials
$adminEmail = 'prasanna@gmail.com'; // Replace with the admin's email
$adminPassword = '1234'; // Replace with the admin's password
$hashedPassword = password_hash($adminPassword, PASSWORD_DEFAULT);

// Prepare and execute the insert query
$stmt = $conn->prepare("INSERT INTO users (email, password, role) VALUES (?, ?, 'admin')");
$stmt->execute([$adminEmail, $hashedPassword]);

echo "Admin user created successfully!";
?>
