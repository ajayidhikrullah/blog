<?php
session_start();



    if (isset($_POST['submit']))
    {
        $fname = $_POST['firstName'];
        $lname = $_POST['lastName'];
        $email = $_POST['email'];
        $pwd = $_POST['password'];
        $pwdRepeat = $_POST['re-password'];

        //instantiate SignUpController class goes

        include "../classes/dbh.classes.php";
        include '../classes/signup.classes.php';
        include '../classes/signup_contr.classes.php';
        
        $signup = new signupContr($fname, $lname, $email, $pwd, $pwdRepeat);
        //Run error handlers and user signup
        $signup->signupUser();
        $_SESSION['firstName'] = $fname;
        
        //going back to landing page or front page
        header('Location: ../index.php?error=none');
    }
?>