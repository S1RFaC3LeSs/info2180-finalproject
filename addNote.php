<?php
    session_start();

    $host = 'localhost';
    $db = 'dolphin_crm';
    $user = 'user';
    $pass = 'password123';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    $queryString = "SELECT * FROM contacts WHERE id = '$id'";
    $grab = $conn->query($queryString);
    $dash = $grab->fetch(PDO::FETCH_ASSOC);

    $queryString = "SELECT * FROM notes WHERE contact_id = '$id'";
    ?>
    
    <div id = "notes">
    <h3><img src="notesIcon.png" alt="Notes Icon">Notes</h3><hr>

    </div>

    <label for="addnote"> Add a note about <?= $dash['firstname']?>; 
    <input type = "text" placeholder = "Enter Note Here">
    </label>
    <button id = "addButton" type = "button">Add Note</button>