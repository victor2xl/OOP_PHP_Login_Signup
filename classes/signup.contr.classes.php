<?php 

class SignupContr extends signup {
    //Properties goes here 
    Private $uid;
    Private $email;
    Private $pwd;
    Private $pwdrepeat;

//constructor goes here. grab data into the properties
 Public function __construct($uid, $email, $pwd, $pwdrepeat){
    $this->uid = $uid;
    $this->email = $email;
    $this->pwd = $pwd;
    $this->pwdrepeat = $pwdrepeat;
 }
    // method goes here   
    
    public function signupUser(){
        if ($this->emptyInput() == false)
        {
            header("location: ../index.php?error=emptyInput");
            exit();
        }

        if ($this->invalidUid() == false)
        {
            header("location: ../index.php?error=invalidUid");
            exit();
        }
        if ($this->invalidEmail() == false)
        {
            header("location: ../index.php?error=invalidEmail");
            exit();
        }
        if ($this->pwdMatch() == false)
        {
            header("location: ../index.php?error=pwdMatch");
            exit();
        }
        if ($this->idExist() == false)
        {
            header("location: ../index.php?error=idExist");
            exit();
        }


        $this->setUser($this->uid,$this->email,$this->pwd);
    }



    private function emptyInput(){

    $result;

    if (empty($this->uid) || empty($this->email) || empty($this->pwd) || empty($this->pwdrepeat)){
    $result = false;
    }
     else {
        $result = true;
     }
      return $result; //return the data
    }


    private function invalidUid(){

        $result;

        if (!preg_match("/^[a-zA-Z0-9]*$/",$this->uid )){
        $result = false;
        }
         else {
            $result = true;
         }
          return $result;
        }


    private function invalidEmail(){
         $result;

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL )){

        $result = false;
        }
         else {
         $result = true;
            }
        return $result;
            }
    

       private function pwdMatch(){

                $result;

               if ($this->pwd !== $this->pwdrepeat){
               $result = false;
               }
                else {
                $result = true;
                   }
               return $result;
                   } 

          private function idExist(){

                $result;

               if (!$this->checkUser($this->uid,$this->email)){
               $result = false;
               }
                else {
                $result = true;
                   }
               return $result;
                   }      

}

