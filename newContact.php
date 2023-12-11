<?php
session_start();

// Database connection parameters
$host = 'localhost';
$db = 'dolphin_crm';
$user = 'user';
$pass = 'password123';
$charset = 'utf8mb4';

// Data Source Name
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Options for PDO
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    // Create PDO instance
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    die("Database connection error: " . $e->getMessage());
}

// Fetch users from the database
$stmt = $pdo->prepare("SELECT id, firstname, lastname FROM Users");
$stmt->execute();
$users = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="new_contact">
        <nav class="nav-bar">
            <img src="images/Dolphin.png" alt="">
            <p>Dolphin CRM</p>
        </nav>
        <div class="side-bar">
            <ul>
                <li><a href="dashboard.php"><span class="material-icons-outlined icon" style="font-size: 2.2rem;">home</span> Home</a></li>
                <li><a href="new_contact.php"><span class="material-icons-outlined icon" style="font-size: 2.2rem;">person_add</span> New Contact</a></li>
                <li><a href="view_users.php"><span class="material-icons-outlined icon" style="font-size: 2.2rem;">group</span> Users</a></li>
                <li><a href="logout.php"><span class="material-icons-outlined icon" style="font-size: 2.2rem;">logout</span> Logout</a></li>
            </ul>
        </div>
        <div class="new-contact-box">
            <h1>New Contact</h1>
            <div class="form-box">
                <form id="addContactForm">
                    <!-- Your form fields -->

                    <button type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>

    <!-- At the end of your body tag -->
    <script>
        $(document).ready(function () {
            $("#addContactForm").submit(function (e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "process_contact.php", // Replace with your actual PHP file for processing
                    data: $("#addContactForm").serialize(),
                    success: function (response) {
                        $("#message-container").html('<div class="success-message">' + response + '</div>');
                    },
                    error: function () {
                        alert("An error occurred. Please try again.");
                    }
                });
            });
        });
    </script>
</body>
</html>
