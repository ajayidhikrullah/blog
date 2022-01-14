<?php
    session_start();
    session_unset();
    session_destroy();

    //go to front page
    header('location: ../index.php?error-noneLogout')

?>