<?php
require_once("includes/classes/FormSanitizer.php");
if(isset($_POST['submitButton'])){

    $firstName=FormSanitizer::formString($_POST['firstName']);
    $lastName=FormSanitizer::FormString($_POST['lastName']);
    $userName=FormSanitizer::FormUsername($_POST['userName']);
    $email=FormSanitizer::FormEmail($_POST['email']);
    $email2=FormSanitizer::FormEmail($_POST['email2']);
    $password=FormSanitizer::FormPassword($_POST['password']);
    $password2=FormSanitizer::FormPassword($_POST['password2']);



}





?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style/style.css">
  <title>Netflex || Welcome</title>
</head>
<body>
  <div class="signInContainer">

  <div class="column">

    <div class="header">
    <i class="fas fa-video fa-2x">
      <span class="ar">نارنج</span>
    </i>
      <h3>Sign Up</h3>
      <span>to continue to Narng</span>
    </div>

  <form action="" method="POST">
    
    <input type="text" name="firstName" placeholder="First name" required>

    <input type="text" name="lastName" placeholder="Last name" required>

    <input type="text" name="userName" placeholder="User name" required>

    <input type="email" name="email" placeholder="Email" required>

    <input type="email" name="email2" placeholder="Confirm email" required>

    <input type="password" name="password" placeholder="Password" required>

    <input type="password" name="password2" placeholder="Confirm password" required>

    <input type="submit" name="submitButton" value="Submit">

  </form>

  <a href="login.php" class="signMessage">Already have an account? Sign in here!</a>
  </div>
  </div>

  <script src="https://kit.fontawesome.com/ca11177b7a.js" crossorigin="anonymous"></script>
</body>
</html>