<?php session_start(); ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Minimal login form Responsive Widget Template : W3Layouts</title>

    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />

</head>

<body>
    <div class="w3l-loginblock signinform">
        <div class="logo">
            <a class="brand-logo" href="index.html">Minimal login form</a>
        </div>
        <!-- main content -->
            <div class="row map-content-9">
                <div class="info-grids">
                    <form action="includes/login.inc.php" method="post" class="">
                        <div class="form-grid">
                            <div class="input-field">
                                <label> Username</label>
                                <input type="text" name="uid" id="email" placeholder="Username">
                            </div>
                            <div class="input-field">
                                <label> Email </label>
                                <input type="email" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="input-field">
                                <label> Password</label>
                                <input type="password" name="pwd" id="Password" placeholder="Password">
                            </div>
                        </div>
                        <label class="check-remaind">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            <p class="remember">Remember Me</p>

                        </label>
                        <button type="submit"  name="submit" class="btn btn-primary btn-style">Login now</button>
                    </form>
                </div>
                <div class="info-grids social-login-details align-self">
                    <?php
                    if (isset($_SESSION["usersid"])){
                    ?>
                    <p class="text-center mt-4">Welcome onboard &nbsp;<span><a href="#"><?php echo $_SESSION["usersuid"];?></p><br/>
                    <p class="text-center mt-3">&nbsp; Your default email is <?php echo $_SESSION["usersemail"];?></a></p><br/><p class="text-center mt-4"><a href="includes/logout.inc.php">Logout here</a></p>
                    <?php
                    }
                    else{
                    ?>
                    <p class="text-center mt-4">Not yet registered? <a href="signup.php">signup</a> here</p>
                    <?php
                    }
                     ?>
                    <!-- <p class="text-center mb-3">Or login with</p> -->
                    <!-- <div class="social-media">
                        <a href="#facebook" class="fb"><span class="fa fa-facebook" aria-hidden="true"></span> Login
                            with facebok</a>
                        <a href="#twitter" class="tw"><span class="fa fa-twitter" aria-hidden="true"></span>
                            Login with twitter</a>
                    </div> -->
                </div>
            </div>
        <!-- //main content -->
        <!-- footer -->
        <div class="footer">
            <p>&copy; 2020 Minimal login form. All Rights Reserved | Design by <a href="https://w3layouts.com/"
                    target="blank">W3layouts</a></p>
        </div>
        <!-- footer -->
    </div>

    <!-- fontawesome v5-->
    <script src="js/fontawesome.js"></script>

</body>

</html>