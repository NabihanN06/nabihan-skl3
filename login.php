<?php
require_once "./helper_php/login_post.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAPOR! | Login Page</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Oxanium:wght@200..800&family=Space+Grotesk:wght@300..700&display=swap');
      * {
        font-family: "Oxanium", sans-serif;
        /* background-color: bisque; */
        /* padding: 5vh; */
      }
    </style>
    <link rel="shortcut icon" href="./assets/LAPOR_SMALL.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
  </head>
<body style="background:white; padding: 2vh; background:darkred">
    <div class="container d-flex flex-column align-items-center justify-content-center w-50" style="height:90 vh; background:bisque; padding:5vh; border-radius:5vh">
      <img src="/image/logo-1.png" style="width: 30%" alt="">
      <br>
      <!-- <br> -->
    <h1 class="font-weight-bold mb-5 ">Log In Kedalam Akunmu !</h1>
    <form action="" method="POST" class="w-100">


  <div class="form-group">
    <label  class="font-weight-bold">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email">
    <p style="color:#ffe847;font-weight:600;text-shadow:none">
    <?php if (!empty($emailErrorMassage)) {
    echo $emailErrorMassage;}?>
  </p>
    </div>
  <div class="form-group">
    <label class=" font-weight-bold mt-1">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
    <p style="color:#ffe847;font-weight:600;text-shadow:none">
    <?php if (!empty($passwordErrorMassage)) {
    echo $passwordErrorMassage;}?>
  </p>
  </div>

  <button type="submit" class="btn btn-primary my-2" style="background-color:red; border:0">Login</button>

  <p>Tidak punya akun?<a style="color:red" class="pl-1" href="/registration.php">Sign Up</a></p>
</form>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>