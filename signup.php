<?php

require "dbconnect.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $fullname = $_POST['fullname'];
  $password = $_POST['password'];
  $email = $_POST['email'];

  $sql1 = "INSERT INTO `intern_users` (`fullname`, `email`, `password`) VALUES ('$fullname', '$email', '$password');";
  $result1 = mysqli_query($conn, $sql1);

  $sql2 = "SELECT * FROM `intern_users` WHERE `email` = '$email'";
  $result2 = mysqli_query($conn, $sql2);
  $num_email = mysqli_num_rows($result2);

  if($num_email>1){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  Account already exists! <a href="/akshat/index_intern.php" class="alert-link">Go to login Page</a>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
  else if($result1){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  Sign Up completed! <a href="/akshat/index_intern.php" class="alert-link">Go to login Page</a>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
}
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sign Up</title>
  </head>
  <body>
    <div class="container mt-5" align="center">
     <div class="card" style="width: 18rem;">
   <div class="card-body">
     <h2 class="card-title">Sign Up</h2>
     <hr>
     <form action="/akshat/signup.php" method="post">
       <div class="mb-3">
         <label for="fullname" class="form-label">Full Name</label>
         <input type="fullname" name="fullname" class="form-control" id="fullname" aria-describedby="nameHelp">
       </div>
   <div class="mb-3">
     <label for="email" class="form-label">Email address</label>
     <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
     <div class="form-text">We'll never share your email with anyone else.</div>
   </div>
   <div class="mb-3">
     <label for="password" class="form-label">Password</label>
     <input type="password" name="password" class="form-control" id="password">
   </div>
   <button type="submit" class="btn btn-primary mb-1">Sign Up</button>
 </form>
  <div class="form-text">Already a user? <a href="/akshat/login.php">Login</a></div>
 </div>
</div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
