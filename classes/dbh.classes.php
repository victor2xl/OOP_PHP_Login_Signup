<?php 

class dbh{

    protected function connect(){

        try {
            // code
            $username = "root";
            $password = "";
            $dbh = new PDO ('mysql:host=localhost:3308; dbname=ooplogin',$username,$password );
            return $dbh;
        }
        catch (PDOException $e) {
        //throw Error
        print "Error"."$e->getMessage(). <br/>";
        die();
        }
    }


}



