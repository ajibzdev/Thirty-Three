<?php
  
  $is_error = false;
  
  if(!filter_var( $_POST["email"], FILTER_VALIDATE_EMAIL)) { 
    header("Location:". __DIR__. "/login.php?message=Enter a valid email");
  }

  // VALIDATE EMAIL AND PASSWORD EXIST
  if(! (preg_match("/[a-z]/i", $_POST["email"]) && preg_match("/[a-z]/i", $_POST["password"])))  {
    header("Location:". __DIR__. "/login.php?message=Please fill in all fields");
  }

  // CHECK IF REQUEST IS POST
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $mysqli = require __DIR__."/database.php";

    $sql = sprintf("SELECT * FROM athlete 
                    WHERE email= '%s' ", 
                    $mysqli->real_escape_string($_POST["email"]));

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    if($user) {
      if(password_verify($_POST["password"], $user["password"])) {
        
        header("Location: /profile.php");
        // header("Location:".__DIR__. "profile.php");
        exit;
      } else {
        header("Location: /login.php?message=1?email=".$_POST["email"]."?password=".$_POST["password"]);
        

        exit;
      }
    } else {
      header("Location: /login.php?message=1?email=".$_POST["email"]."?password=".$_POST["password"]);

      exit;
    }



    $is_error = true;

    exit;
  }
  
?>