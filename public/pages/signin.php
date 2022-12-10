<?php
session_start();
require_once("../../app/loader.php");
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Sign In & Sign Up</title>
</head>
<body>

    <div class="container-fluid vh-100 p-0 d-flex justify-content-center flex-column align-items-center">

      <div class="login-label parent  w-50 d-flex flex-column">
        <h3 class="child m-0 h-100 d-flex align-items-center justify-content-center " id="headerForm">Log in to continue</h3>
        <div class=" d-flex">
          <div class="option-login border-login p-1 form-section-active" id="login">
              Login
          </div>
          <div class="option-signup border-signup p-1 " id="signup">
              Sign Up
          </div>
        </div>
      </div>
      <div class=" login-form ">
        <form action="" method="post" class="my-5 d-flex flex-column align-items-center" id="loginForm" >
             
            <p id="erreur-displaylogin" class="text-danger fw-bolder"><?php echo $erreurSignin; ?></p>

            <div class=" w-75 d-flex align-items-center  flex-column ">
              <label for="exampleInputEmail1" class="form-label ">Email address</label>
              <input type="email" name="email" class="form-control w-100 " id="email-login"  placeholder="name@example.com">
              <p id="erreur-signinpemail" class="w-100 d-none fw-bolder text-danger">Enter a valid email</p>
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control w-100 " id="password-login" placeholder="password">
              <p id="erreur-signinpassword" class="w-100 d-none fw-bolder text-danger">password must containes at list 8 charcters,one upperCase,lowercase and special charcter</p>
              <input type="submit"  class="btn btn-primary w-75 btn-login" id="btn-login" name="login" value="log in">
            </div>
        </form>
          <form action="" method="post"  class="my-5 d-flex flex-column align-items-center d-none" id="signupForm">
            <div class="w-75 d-flex align-items-center  flex-column">
              <p class="text-danger fs-5" id="erreur-message"><?php echo $erreur;?></p>
              <div class="d-flex justify-content-between gap-3">
                <div>
                  <label for="fisrt-name" class="form-label">First Name</label>
                  <input type="text" name="first-name" id="fisrt-name"  class="form-control "   placeholder="Your first name">
                  <p id="firstName-erreur" class="d-none text-danger fs-5">Invalid first-name</p>
                </div>
                <div>
                  <label for="last-name" class="form-label">Last Name</label>
                  <input type="text" name="last-name" id="last-name" class="form-control"   placeholder="Your last name">
                  <p id="lastName-erreur" class="d-none text-danger fs-5">Invalid last-name</p>
                </div>
              </div>
              <label for="telephone" class="form-label">Phone Number</label>
              <input  type="tel" class="form-control w-100" name="telephone" id="telephone" placeholder="+1230384394">
               <p id="telephone-erreur" class="w-100 d-none text-danger fs-5">Invalid telephone number</p>
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control w-100 mb-2" name="signupemail" id="signupemail" placeholder="name@example.com">
              <p id="email-erreur" class="w-100 d-none text-danger fs-5">Invalid Email address</p>
              <label for="signuppassword" class="form-label">Password</label>
              <input type="password" class="form-control w-100 " name="signuppassword" id="signuppassword" placeholder="password">
              <p id="password-erreur" class="w-100 d-none text-danger fs-5">Invalid password</p>
              <input type="submit" class="btn btn-primary w-75 btn-login" id="btn-signin" name="signup" value="Sign up">
            </div>
        </form>
            </div>    
      </div>
    </div>
    <!-- Scripts -->
    <script src="../assets/js/js.js"></script>
</body>
</html>

