<?php
class postContr extends Post{
    private $postTitle;
    private $postBody;

    public function __construct($postTitle, $postBody) {
        $this->postTitle = $postTitle;
        $this->postBody = $postBody;
    }

    public function userPost(){
        if($this->emptyInput() == false){
            //echo 'Empty input 000';
            header('Location: ../index.php?error=emptyinput');
            exit();
        }

        // if($this->invalidLname() == false) {
        //     //echo 'invalid usrname';
        //     header('Location: ../index.php?error=invalidusername');
        //     exit();
        // }

        // if($this->pwdMatch() == false){
        //     //echo 'passwords dont match!';
        //     header('location: ../index.php?error=passwordmatch');
        //     exit();
        // }
        
        // if($this->emailTaken() == false){
        //     header('location: ../index.php?error=alreadyexists');
        //     exit();
        // }

        $this->setPost($this->postTitle,$this->postBody);

    }


    private function emptyInput(){
        $result;
        if(empty($this->postTitle) || empty($this->postBody)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    // private function invalidLname(){
    //     $result;
    //     if (!preg_match("/^[a-zA-Z0-9]*$/", $this->lname))
    //     {
    //         $result = false;
    //     }
    //     else{
    //         $result = true;
    //     }
    //     return $result;
    // }

    // public function invalidEmail(){
    //     $result;
    //     if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))
    //     {
    //         $result = false;
    //     }
    //     else{
    //         $result = true;
    //     }
    //     return $result;
    // }


    // private function pwdMatch(){
    //     $result;
    //     if($this->pwd !== $this->pwdRepeat){
    //         $result = false;
    //     }
    //     else{
    //         $result = true;
    //     } return $result;
    // }

    // private function emailTaken(){
    //     $result;
    //     if(!$this->CheckUser($this->email)){
    //         $result = false;
    //     }
    //     else{
    //         $result = true;
    //     }
    //     return $result;
    // }
}