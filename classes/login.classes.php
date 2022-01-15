<?php
class Login extends Dbh{
    protected function getUser($email, $pwd){
       $stmt = $this->connect()->prepare('SELECT email FROM users WHERE email = ? AND `password` = ?');

    //    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    if(!$stmt->execute(array($email, $pwd))){
        $stmt = null;
        header('location: ../index.php?error=stmtfailed');
        exit();
    }

    if ($stmt->rowCount() == 0){
        header('location: ../index.php?error=usernotFound ooo');
        exit();
    }

    //how do we return the data
    $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //check password returns True or False
    $checkPwd = password_verify($pwd, $pwdHashed[0]['password']);

    if($checkPwd == false){
        $stmt = null;
        header('location: ../index.php?error=WrongPassword ooo');
        exit();
    }
    elseif($checkPwd == true){
        $stmt = $this->connect()->prepare('SELECT * FROM email WHERE email = ? AND `password` = ?');

        if(!$stmt->execute(array($email, $pwd))){
            $stmt = null;
            header('location: ../index.php?error=stmtFailed o');
            exit();
        }
        //check if there is any result
        if($stmt->rowCount() == 0){
            $stmt = null;
            header("location:../index.php?error=usernotFound again");
            exit();
        }

        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

        session_start();
        $_SESSION['firstName'] = $user[0]['firstName'];
        $_SESSION['email'] = $user[0]['email'];
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