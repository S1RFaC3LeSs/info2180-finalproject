<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dolphin CRM</title>
    <link rel="stylesheet" href="user_styles.css">
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
                <li><a href="viewUsersList.php"><img src = "group_681494.png" alt = "User Symbol" >Users</a></li>
                <hr>
                <li><a href=""><img src = "icons8-exit-50.png" alt = "Logout Symbol" >Logout</a></li>
            </ul>
        </div>
        <div class = "main">
            <h1>New User</h1>
            <div class="main-form">
                
                
                <form action="addUser.php" class="new-user">
                    <div class = "name-container">
                    <div class = firstname-container>
                        <label for="fname" class="input">First Name </label> 
                        <input type="text" class="textfield" name="fname" placeholder="Jane"></label>
                    </div>  
                    <div class = lastname-container>
                        <label for="lname" class="input">Last Name </label>
                        <input type="text" class="textfield" name="lname" placeholder="Doe"></label>
                    </div>  
                    </div> 
                    
                    <div class = credential-container>
                        <div class = "email-container">
                            <label for="email" class="input">Email </label>
                            <input type="email" class="textfield" name="email" placeholder="something@example.com">
                        </div>

                        <div class = "password-container">
                            <label for="password" class="input">Password </label> 
                            <input type="password" class="textfield" name="password" ></label>
                        </div>
                        
                    </div>
                    
                    <div class = role>
                        <label for="roles">Role</label>
                        <select name="roles" id="roleSelector">
                            <option value="Member">Member</option>
                            <option value="Admin">Admin</option>
                        </select> 
                    </div>
                    <div class = "button-container" >
                        <button id = "savebutton" type = button>Save </button>
                    </div>
                    
                </form>
                
            </div> 
    </div>
    
</div>

</body>

</html>