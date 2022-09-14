<?php 

class loginContr extends login {
    //Properties goes here 
    Private $uid;
    Private $pwd;


//constructor goes here. grab data into the properties
 Public function __construct($uid, $pwd){
    $this->uid = $uid;
    $this->pwd = $pwd;
 }
    // method goes here   
    
    public function loginUser(){
        if ($this->emptyInput() == false)
        {
            header("location: ../index.php?error=emptyInput");
            exit();
        }

        $this->getUser($this->uid,$this->pwd);
    }



    private function emptyInput(){

    $result;

    if (empty($this->uid) || empty($this->pwd)){
    $result = false;
    }
     else {
        $result = true;
     }
      return $result; //return the data
    }  

}

