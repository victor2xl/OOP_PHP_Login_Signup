<?php

//Model

class login extends dbh {


    protected function getUser ($uid,$pwd){

        $stmt= $this->connect()->prepare('SELECT users_pwd FROM users WHERE users_uid=? or users_email=?');
        
        if (!$stmt->execute(array($uid,$pwd))){
           $stmt = null;
           header("location: ../index.php?error=stmtfailed");
           exit();
        }

        if ($stmt->rowCount() == 0){

            $stmt = null;
            header("location: ../index.php?error=userNotfound");
            exit();
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkedPwd = password_verify($pwd,$pwdHashed[0]["users_pwd"]);

        if ($checkedPwd == false){

            $stmt = null;
            header("location: ../index.php?error=wrongPassword");
            exit();
        }
            elseif($checkedPwd == true) {
            $stmt= $this->connect()->prepare('SELECT * FROM users WHERE users_uid=? or users_email=? AND users_pwd = ?');

            if (!$stmt->execute(array($uid,$uid,$pwd))){
                $stmt = null;
                header("location: ../index.php?error=loginQueryfailed");
                exit();
             }
     
            }
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

        session_start();

        $_SESSION["usersid"] = $user[0]["users_id"];
        $_SESSION["usersuid"] = $user[0]["users_uid"];
        $_SESSION["usersemail"] = $user[0]["users_email"];
    
        $stmt = null;

        }


}