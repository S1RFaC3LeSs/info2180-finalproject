<?php
session_start();

//Data elements
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = filter_var(htmlspecialchars($_POST['email']), FILTER_VALIDATE_EMAIL);
    password = $_POST['password']
    $host = 'localhost'

    if(!$email){
        echo 'Email not valid!';
    }

    if (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/", $password)) {
        echo 'Password must contain aleast one letter one number and be a minimum length of 8! <br/>';
      }
      $conn = new mysqli($host, "root", "", "dolphin_crm");
      if($conn->connect_error){
          die("Failed to connect:  ".$conn->connect_error);
      }else{
              
              $data = $conn->query("SELECT * FROM users WHERE email='$email' AND password='$password'");
      
              if ($data->num_rows > 0) {
                  $_SESSION["email"] = $email;
                  $_SESSION["loggedIn"] = 1;
                  
                  header("Location: newuser.html");
                  exit();
      
              } else {
                  
                  echo "<p> Invalid Email or Password </p>";
              }
          }
    

}
?>