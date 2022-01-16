<?php
session_start();



    if (isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $pwd = $_POST['password'];

        //instantiate SignUpController class goes

        include "../classes/dbh.classes.php";
        include '../classes/login.classes.php';
        include '../controller/login.contr.php';
        
        $login = new LoginContr($email, $pwd);
        //Run error handlers and user signup
        $login->loginUser();
        $_SESSION['firstName'] = $email;
        
        //going back to landing page or front page
        header('Location: ../index.php?error=none');
    }
?>