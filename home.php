<?php
    session_start();
    if (!isset($_SESSION['username'])) {    //here not set means not logged in or username is not set   
        header('location:login.php');       //without username if we try to access home it will redirect to login page 
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center text-warning mt-5">welcome!!!
    <?php
      echo $_SESSION['username'];
    ?></h1>

    <div class="container">
      <a href="logout.php" class="btn btn-primary mt-5">LogOut</a>
    </div>
  </body>
</html>