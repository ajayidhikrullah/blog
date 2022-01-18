<?php
session_start();



    if (isset($_POST['submit']))
    {
        $postTitle = $_POST['title'];
        $postBody = $_POST['body'];

        //instantiate postController class goes

        include "../classes/dbh.classes.php";
        include '../classes/post.classes.php';
        include '../controller/post.contr.php';
        
        $post = new postContr($postTitle, $postBody);
        //Run error handlers and user post
        $post->userPost();
        
        //going back to landing page or front page
        header('Location: ../index.php?error=PostAllGood');
    }
?>