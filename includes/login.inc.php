<?php
if (isset($_POST["submit"]))
{
    //grabbing data
    $uid =$_POST["uid"];
    $email =$_POST["email"];
    $pwd =$_POST["pwd"];
    

}
    //instantiate the signupContr
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login.contr.classes.php";
    $login = new loginContr($uid, $pwd);

    
    //running error handler and user sign up
     $login->loginUser();

    //going back to front page
    header("location: ../index.php?error=loginSuccessfully");
