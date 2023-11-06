<?php
include "./configuration.php";
if (isset($_POST['register'])) {
   
    $username = $_POST['username'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $password = $_POST['password'];
   // $stmt->execute([$username, $email, $password]);
$sql="insert into users  values('$username','$password','$email','$country')"  ;  // Redirect to login page or another page


    if(mysqli_query($conn, $sql)){
        echo  "<h1 class='msg'>congratulation! you registered to system :) </h1>";


  }else {
        echo  "sorry somting wrong !!!  :", mysqli_error($conn);
  }
}

   ?> 



<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="form-container register-form">
        <h2>Register <hr></h2>
        <form action="register.php" method="POST" class="register-page">
            <input class="input" type="text" name="username" placeholder="Username" required><br>
            <input class="input" type="email" name="email" placeholder="Email" required><br>
            <select class="input" name="country" id="type">
                <option value="afghanistan">afghanista</option>
                <option value="iran">iran</option>
                <option value="pakistan">pakistan</option>
            </select>
            <input class="input" type="password" name="password" placeholder="Password" required><br>
            <input class="input" type="password" name="password" placeholder="confirm Password" required><br>
            <input class="btn-sub btn-register" type="submit" name="register" value="Register">
        </form>
       <button class="btn-sub btn-reg"><a href="index.php">Login</a></button>
    </div>
</body>
</html>