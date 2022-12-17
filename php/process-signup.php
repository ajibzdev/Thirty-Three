<?php
    

    // FIRST NAME IS REQUIRED
    if(empty($_POST["first_name"])) {
        die("First Name is required");
    }

    // LAST NAME IS REQUIRED
    if(empty($_POST["last_name"])) {
        die("Last Name is required");
    }

    
    // Email is not valid
    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        die("Email is NOT VALID");
    
    }

    if(!strlen($_POST["password"]) > 8) {
        die("Password must be greater than 8 characters");
    }

    // PASSWORD MUST CONTAIN LETTER
    if(!preg_match("/[a-z]/i", $_POST["password"])) {
        die("Password must contain a letter");
    }

    // PASSWORD MUST CONTAIN NUMBER
    if(!preg_match("/[0-9]/i", $_POST["password"])) {
        die("Password must contain a number");
    }

    // HASHING THE PASSWORD
    $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $mysqli = require __DIR__ . "/database.php";

    $sql = "INSERT INTO athlete(first_name, last_name, email, password) VALUES (?, ?, ?, ?)";

    $stmt = $mysqli->stmt_init();

 

    if(!$stmt->prepare($sql)) {
        die("SQL ERROR:". $mysqli->error);
    }

    $stmt->bind_param("ssss", 
                    $_POST["first_name"],
                    $_POST["last_name"],
                    $_POST["email"],
                    $password_hash,
    );

    if($stmt->execute()) {
        
        header("Location: ".__DIR__."/login.php");
        exit;

    } else {
        if($mysqli->errno == 1062) {
            die("Email already in use please login instead");
        } else {
            die("Error no: " . $mysqli->errno);
            die("Error ". $mysqli->error);
        }
    };

    print_r($_POST);
?>
