<?php

$pdo = new PDO('mysql:host=localhost;dbname=dolphin', 'your_username', 'your_password');

// User data
$firstname = 'John';
$lastname = 'Doe';
$email = 'admin@project2.com';
$rawPassword = 'password123';
$role = 'user';

// Hash the password
$hashedPassword = password_hash($rawPassword, PASSWORD_DEFAULT);

// Sanitize input (to prevent SQL injection)
$firstname = $pdo->quote($firstname);
$lastname = $pdo->quote($lastname);
$email = $pdo->quote($email);
$role = $pdo->quote($role);

// Insert user into Users table
$query = "INSERT INTO Users (firstname, lastname, password_hash, email, role) VALUES ($firstname, $lastname, '$hashedPassword', $email, $role)";
$pdo->exec($query);

echo "User added successfully.\n";
?>

