<?php
class signupContr extends Signup{
    private $fname;
    private $lname;
    private $email;
    private $pwd;
    private $pwdRepeat;

    public function __construct($fname, $lname, $email, $pwd, $pwdRepeat) {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
    }

    public function signupUser(){
        if($this->emptyInput() == false){
            //echo 'Empty input 000';
            header('Location: ../index.php?error=emptyinput');
            exit();
        }

        if($this->invalidLname() == false) {
            //echo 'invalid usrname';
            header('Location: ../index.php?error=invalidusername');
            exit();
        }

        if($this->pwdMatch() == false){
            //echo 'passwords dont match!';
            header('location: ../index.php?error=passwordmatch');
            exit();
        }
        // var_dump($this->emailTaken());exit;
        // if user already exists
        if($this->emailTaken() == false){
            //echo 'username or email already taken;
            header('location: ../index.php?error=alreadyexists');
            exit();
        }

        $this->setUser($this->fname, $this->lname, $this->email, $this->pwd, $this->pwdRepeat);

    }


    private function emptyInput(){
        $result;
        if(empty($this->fname) || empty($this->lname) || empty($this->email) || empty($this->pwd) || empty($this->pwdRepeat)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function invalidLname(){
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->lname))
        {
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    public function invalidEmail(){
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))
        {
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }


    private function pwdMatch(){
        $result;
        if($this->pwd !== $this->pwdRepeat){
            $result = false;
        }
        else{
            $result = true;
        } return $result;
    }

    private function emailTaken(){
        $result;
        if(!$this->CheckUser($this->email)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }
}