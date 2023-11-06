

<?php

include "configuration.php";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password =$_POST['password'];
    $sql="select * from users ";
    $result=mysqli_query($conn , $sql);
    if (!$result) {
        echo "somting wrong";
        http_response_code(404);
        die(mysqli_error($conn));
    }
    $r=mysqli_fetch_all($result,MYSQLI_ASSOC);
    
    // print_r($r);
 for ($i=0;$i< count($r);$i++) {//check all users
  
    if ( $r[$i]['email']==$email && $r[$i]['password']==$password) {
    header("Location: Dashboard.php");
   } else if($i==count($r)-1){
            echo "<h1 class='alert'> your username and password is not correct </h1>";

   }

}

}

   ?> 



<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Login
            <hr>
        </h2>
        
        <form action="index.php" method="POST">
            <input class="input" type="email" name="email" placeholder="Email" required>
            <input class="input" type="password" name="password" placeholder="Password" required>
            <input class="btn-sub" type="submit" name="login" value="Login">
        </form>
       <button class="btn-sub register"> <a href="register.php">Register</a></button>
    </div>
</body>
</html>