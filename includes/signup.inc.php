<?php
if (isset($_POST["submit"]))
{
    //grabbing data
    $uid =$_POST["uid"];
    $email =$_POST["email"];
    $pwd =$_POST["pwd"];
    $pwdrepeat =$_POST["pwdrepeat"];

}
    //instantiate the signupContr
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup.contr.classes.php";
    $signup = new SignupContr($uid, $email, $pwd, $pwdrepeat);

    
    //running error handler and user sign up
     $signup->signupUser();

    //going back to front page
    header("location: ../index.php?error=signupSuccessful");
