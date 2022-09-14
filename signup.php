
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
                    <form action="includes/signup.inc.php" method="POST" class="">
                        <div class="form-grid">
                        <div class="input-field">
                                <label> Username</label>
                                <input type="text" name="uid" id="email" placeholder="Username" >
                            </div>
                            <div class="input-field">
                                <label> Email </label>
                                <input type="email" name="email" id="email" placeholder="Email" >
                            </div>
                            <div class="input-field">
                                <label> Password</label>
                                <input type="password" name="pwd" id="Password" placeholder="Password" >
                            </div>
                            <div class="input-field">
                                <label> Confirm Password</label>
                                <input type="password" name="pwdrepeat" id="Password" placeholder="Password" >
                            </div>
                        </div>
                        <button type="submit"  value ="submit"  name ="submit" class="btn btn-primary btn-style">Sign up now</button>
                    </form>
                </div>
                <div class="info-grids social-login-details align-self">
                    <p class="text-center mb-3">Or login with</p>
                    <div class="social-media">
                        <a href="#facebook" class="fb"><span class="fa fa-facebook" aria-hidden="true"></span> Login
                            with facebok</a>
                        <a href="#twitter" class="tw"><span class="fa fa-twitter" aria-hidden="true"></span>
                            Login with twitter</a>
                    </div>
                    <p class="text-center mt-4">Have Account ? <a href="index.php">Login</a>
                        here</p>
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