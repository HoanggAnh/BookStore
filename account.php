<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/form.css">
</head>

<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-form" style="padding-top:60px">
                        <h2 class="form-title">Log In</h2>
                        <form method="POST" class="login-form" id="login-form">
                            <div class="form-group">
                                <label for="Email"><i class="zmdi zmdi-account material-icons-name" style="margin-left:10px"></i></label>
                                <input type="text" name="your_name" id="your_name" placeholder="Email" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock" style="margin-left:10px"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remmeber Me?</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" style="font-size:1rem">
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/form1.jpg" alt="sing up image"></figure>
                        <a class="signup-image-link" href="index.php" style="font-size:2rem; text-decoration:none"><span style="color: #323741;">Book</span><span style="color: #f38556;">Store</span></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sign up Form -->
        <section class="sign-up">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-image">
                        <figure><img src="images/form2.jpg" alt="sing up image"></figure>
                        <a class="signup-image-link" href="index.php" style="font-size:2rem; text-decoration:none"><span style="color: #323741;">Book</span><span style="color: #f38556;">Store</span></a>
                    </div>

                    <div class="signup-form">
                        <h2 class="form-title">Sign Up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name" style="margin-left:10px"></i></label>
                                <input type="text" name="name" id="name" placeholder="Full Name" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email" style="margin-left:10px"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock" style="margin-left:10px"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline" style="margin-left:10px"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" style="font-size:1rem">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>