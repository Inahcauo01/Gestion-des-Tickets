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
        <form action="" method="" class="my-5 d-flex flex-column align-items-center " id="loginForm">
            <div class=" w-75 d-flex align-items-center  flex-column ">
              <label for="exampleInputEmail1" class="form-label ">Email address</label>
              <input type="email" class="form-control w-100 " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com">
              
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control w-100 " id="exampleInputPassword1" placeholder="password">
              <button type="submit" class="btn btn-primary w-75" id="btn-login" name="login">Log in</button>
            </div>
            
        </form>
          <form action="" method=""  class="my-5 d-flex flex-column align-items-center d-none" id="signupForm">
            <div class=" w-75 d-flex align-items-center  flex-column ">
              <div class="d-flex justify-content-between gap-3">
                <div>
                  <label for="exampleInputEmail1" class="form-label">First Name</label>
                  <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your first name">
                </div>
                <div>
                  <label for="exampleInputEmail1" class="form-label">Last Name</label>
                  <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your last name">
                </div>
              </div>
              <label for="exampleInputEmail1" class="form-label">Phone Number</label>
              <input type="email" class="form-control w-100" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your phone number">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control w-100 mb-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control w-100 " id="exampleInputPassword1" placeholder="password">
              <button type="submit" class="btn btn-primary w-75" id="btn-login" name="signup">Sign up</button>
            </div>
        </form>
            </div>    
      </div>
    </div>
    <!-- Scripts -->
    <script src="../assets/js/js.js"></script>
</body>
</html>