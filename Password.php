<?php

// The password to be hashed
$rawPassword = 'password123';

// Hash the password
$hashedPassword = password_hash($rawPassword, PASSWORD_DEFAULT);

// Output the hashed password
echo $hashedPassword;

?>
