<?php
include 'header.php';
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Phone Book</title>

  <style>
    body {
      background-image: url("https://sg-it.dk/wp-content/uploads/2021/05/pexels-lumn-167699-scaled.jpg");
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      /* background-color: #eee; */
    }

    #modal-signup {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      display: none;
      animation: modalFadeIn ease-in 0.4s;
      background-color: rgba(0, 0, 0, 0.6)
    }

    #modal-signup #btn-close {
      position: absolute;
      top: 0;
      right: 0;
      z-index: 5;
      padding: 14px;
      font-size: 25px;
      color: white
    }

    #modal-signup #btn-close:hover {
      cursor: pointer
    }

    .col-bg {
      padding: 8px 16px;
      background-image: linear-gradient(to left bottom, #3A5CAC, #F87C80);
    }

    .sign-up .heading {
      font-size: 37px;
      font-family: cursive;
      color: springgreen;
      margin-top: 16px;
      text-align: center
    }

    .sign-up .form-group-spe {
      display: flex;
      flex-direction: row;
      justify-content: space-between
    }

    .form-group {
      margin-right: 0 !important
    }

    .form-control {
      font-size: 13px;
      border-radius: 30px;
      border: none;
      outline: none;
      height: 35px
    }

    .form-control:focus::placeholder {
      border: none
    }

    .form-group-spe p,
    .form-group p,
    .form-check-label {
      font-size: 14px;
      margin-bottom: 4px
    }

    .form-group-spe .form-control {
      width: 100%
    }

    .form-group .form-control {
      width: 100%
    }

    .sign-up .form-group {
      display: block
    }

    .btn-success {
      margin-top: 8px !important;
      width: 35%;
      height: 35px;
      border-radius: 30px
    }

    .btn-success:hover {
      box-shadow: rgb(38 57 77) 0px 20px 30px -10px !important
    }

    .form-check-input {
      width: 20px;
      height: 20px
    }

    .col-title {
      display: flex;
      flex-direction: column;
      justify-content: center
    }

    .col-title h1 {
      font-size: 60px;
      margin-left: 50px;
      color: springgreen;
      font-family: cursive
    }

    .title-social {
      font-size: 13px;
      text-align: center;
      margin-top: 6px !important;
      margin-bottom: 2px !important
    }

    .signup-other {
      display: flex;
      margin-top: 6px;
      align-items: center;
      justify-content: space-around
    }

    .signup-other .social img {
      width: 20px;
      height: 20px;
      margin-right: 8px
    }

    .signup-other .social {
      width: 50%;
      height: 40px;
      display: flex;
      flex-direction: row;
      justify-content: center;
      margin-right: 6px;
      padding-top: 8px;
      border-radius: 30px;
      background-color: dimgrey
    }

    .signup-other .social:hover {
      cursor: pointer;
      opacity: 0.8;
      color: springgreen;
      background-color: #222425;
      transition: all 0.3s ease-in
    }

    .social p {
      text-align: center
    }

    .re-login {
      font-size: 13px;
      margin-top: 16px;
      margin-bottom: 4px;
      text-align: center
    }

    .re-login a {
      font-size: 15px;
      text-decoration: none;
      color: springgreen
    }

    .re-login a:hover {
      color: #DE9254
    }
  </style>
</head>

<body>
  <main>
    <div class="container">
      <div class="d-flex justify-content-center">
        <div class="row my-5">
          <div class="col-bg col-md-6 text-left text-white lcol">
            <form class="sign-up">
              <h2 class="heading mb-4" style="color: lavender">Registration form</h2>
              <hr>
              <div class="form-group-font fone mt-2">
                <div class="form-item">
                  <p>Full name</p> <input type="name" class=" form-control" placeholder="Full name">
                </div>
              </div>
              <div class="form-group fone mt-2">
                <p>Email</p> <input type="email" class=" form-control" placeholder="Email">
              </div>
              <div class="form-group fone mt-2">
                <p>Password</p> <input type="password" class="form-control" placeholder="Password">
              </div>
              <div class="form-group fone mt-2">
                <p>Confirm password</p> <input type="password" class="form-control" placeholder="Password">
              </div> <label class="mt-16 checkbox-cus"> <input type="checkbox" class="form-check-input ml-0" id="exampleCheck1"> <span class="form-check-label ml-3" for="exampleCheck1">I accept the Terms of Use & Policy</span> </label>
            </form> <button type="button" class="btn btn-success mt-5">Sign Up</button>
            <p class="title-social">Or signup with </p>
            <div class="signup-other">
              <div class="social"> <img src="https://www.svgrepo.com/show/13642/facebook.svg" intrinsicsize="512 x 512" width="180" height="180" srcset="https://www.svgrepo.com/show/13642/facebook.svg 4x" alt="Facebook SVG Vector" title="Facebook SVG Vector">
                <p>Facebook</p>
              </div>
              <div class="social"> <img src="https://www.svgrepo.com/show/223041/google.svg" intrinsicsize="512 x 512" width="180" height="180" srcset="https://www.svgrepo.com/show/223041/google.svg 4x" alt="Google SVG Vector" title="Google SVG Vector">
                <p>Google</p>
              </div>
            </div>
            <p class="re-login">Already have account ? <a href="index.php" id="login-open2">Login</a> </p>
          </div>

          <div class="col-sm-6 px-0 d-none d-sm-block">
            <img src="https://i.pinimg.com/originals/2c/80/61/2c806138e555507c468766814bccb7c0.jpg" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
          </div>
        </div>
      </div>
  </main>
</body>

</html>