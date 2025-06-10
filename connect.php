<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'loginpageform';

    $con = mysqli_connect($hostname,$username,$password,$database);

    if (!$con) {
        die(mysqli_connect_error($con));
    }
  
?>