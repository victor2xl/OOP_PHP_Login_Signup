<?php
session_start();
session_unset();
session_destroy();

//going back to the homepage
header("location: ../index.php?error=logoutSuccessful");
?>