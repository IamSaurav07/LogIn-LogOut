<?php
    session_start();
    session_destroy();
    session_unset();        //clears out the session for usage
    header('location:login.php');
    
?>