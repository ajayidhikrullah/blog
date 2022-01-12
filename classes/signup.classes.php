<?php
class Signup extends Dbh{
    protected function setUser($fname, $lname, $email, $pwd, $hashedPwd){
       $stmt = $this->connect()->prepare('INSERT INTO users (firstName, lastName, email, `password`) VALUES (?, ?, ?, ?);');

       $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    if(!$stmt->execute(array($fname, $lname, $email, $hashedPwd))){
        $stmt = null;
        header('location: ../index.php?error=stmtfailed');
        exit();
    }
    $stmt = null;
    }

    protected function checkUser($email){
        $stmt = $this->connect()->prepare("SELECT email FROM users WHERE email = ?");
        // var_dump($email);exit();

        if(!$stmt->execute(array($email))){
            $stmt = null;

            header('location: ../index.php?error=stmtfailed o');
            exit();
        }
        $resultCheck;
        if($stmt->rowCount() > 0){
            $resultCheck = false;
        }
        else{
            $resultCheck = true;
        }
    
        return $resultCheck;
    }















}