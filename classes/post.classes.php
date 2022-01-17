<?php
class Post extends Dbh{
    protected function setPost($postTitle, $postBody){
       $stmt = $this->connect()->prepare('INSERT INTO posts (title, body) VALUES (?, ?);');


    if(!$stmt->execute(array($postTitle, $postBody))){
        $stmt = null;
        header('location: ../index.php?error=postStmtFailed o');
        exit();
    }
    $stmt = null;
    }

    // protected function checkUser($email){
    //     $stmt = $this->connect()->prepare("SELECT email FROM users WHERE email = ?");
    //     // var_dump($email);exit();

    //     if(!$stmt->execute(array($email))){
    //         $stmt = null;

    //         header('location: ../index.php?error=stmtfailed o');
    //         exit();
    //     }
    //     $resultCheck;
    //     if($stmt->rowCount() > 0){
    //         $resultCheck = false;
    //     }
    //     else{
    //         $resultCheck = true;
    //     }
    
    //     return $resultCheck;
    // }
}