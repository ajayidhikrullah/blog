<?php
class Signup extends Dbh{
    protected function setUser($fname, $lname, $email, $pwd){
       $stmt = $this->connect()->prepare('INSERT INTO users (firstName, lastName, email, `password`) VALUES (?, ?, ?, ?);');

       $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    if(!$stmt->execute(array($fname, $lname, $email, $hashedPwd))){
        $stmt = null;
        header('location: ../index.php?error=stmtfailed');
        exit();
    }
    $stmt = null;
    }

    protected function checkUser($lname, $email){
        $stmt = $this->connect()->prepare('SELECT fname from users WHERE lname = ? OR email = ?;');
 
        
        if(!$stmt->execute(array($lname, $email))){
            $stmt = null;
            header('location: ../index.php?error=stmtfailed');
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