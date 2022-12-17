<?php
  $errorMessage = "";

  if($_SERVER["REQUEST_METHOD"] == "GET"){
      $errorMessage = $_GET['message'] ?? "";    
  } else{
    
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log in</title>
    <link rel="stylesheet" href="../css/pages/signup.css" />
  </head>

  <body>
    <form class="form" action="../php/process-login.php" method="POST">
      <div class="form__heading">
        <?php  if($errorMessage != ""): ?>
          <h3 class="error" >
            <?php echo $errorMessage ?>
          </h3>
        <?php  endif;?>

        <h2 class="heading-green-1">Log in</h2>
      </div>
      <div class="form__group">
        <label for="emailLogin">Email</label>
        <input type="text" name="email" id="emailLogin" value="<?php $_GET["email"] ?? "" ?>" />
      </div>
      <div class="form__group">
        <label for="passwordLogin">Password</label>
        <input type="password" name="password" id="passwordLogin" value="<?php $_GET["password"] ?? "" ?>" />
      </div>

      <div class="form__info">
        <p>
          Dont have an account ?
          <a href="./sign-up.html" class="link-green">Sign Up.</a>
        </p>
      </div>
      <div class="form__btn">
        <button type="submit" class="btn btn-green">Login</button>
      </div>
    </form>
  </body>
</html>
