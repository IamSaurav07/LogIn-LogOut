<?php

$login = 0;
$invalid = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    $UserName = $_POST['username'];
    $Password = $_POST['password'];

    $sql = "Select * from `registration` where username ='$UserName' and password='$Password'";      //here 'and' operator checks that both username and password should be same
    $result = mysqli_query($con,$sql);

    if ($result) {                         //if query run successfuly
        $num = mysqli_num_rows($result);  //no.of rows inside db
        if ($num>0) {                       //if that user already present
            //echo "Login Successful";
            $login=1;
            session_start();
            $_SESSION['username']=$UserName;
            header('location:home.php');
        } 
        else{
            //echo"Invalid Data ";
            $invalid = 1; 
        }
    }
}



?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
 
<body>
<?php
    if ($login) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong> Success !!!</strong> You are successfuly logged in.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }
?> 

<?php
    if ($invalid) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong> Error !!!</strong> invalid details.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }
?> 

    <h1 class="text-center mt-3">login to website</h1>
    <div class="container mt-5">
        <form action="login.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">User Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Username" name="username">
                <div id="emailHelp" class="form-text">We'll never share your infomations with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>