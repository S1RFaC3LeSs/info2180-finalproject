<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dolphin CRM</title>
    <link rel="stylesheet" href="users_display_styles.css">
</head>
<body>
    <header>
        <div>
            <img src="dolphinicon.png" alt="Cartoon Dolphin Logo">
            <p>DOLPHIN CRM</p>
        </div>
    </header>
    <div class = "container">
        <div class="side-bar">
            <ul>
                <li><a href=""><img src = "home_263115.png" alt = "Home Symbol" >Home</a></li>
                <li><a href=""><img src = "user_4555508.png" alt = "Contact Symbol" >New Contact</a></li>
                <li><a href=""><img src = "group_681494.png" alt = "User Symbol" >Users</a></li>
                <hr>
                <li><a href=""><img src = "icons8-exit-50.png" alt = "Logout Symbol" >Logout</a></li>
            </ul>
        </div>

        <div class ="usersdisplay">
            <div class = divheader>
                <h1 id = "displayheader">Users</h1>
                <button id = "addUserButton" type = "button"> &#43;Add User</button>
            </div>
            

            
            <div class = "tablearea">
            <table id = "users">
            <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Created</th>
            </tr>
            </div>
            
        </div>



</body>

</html>