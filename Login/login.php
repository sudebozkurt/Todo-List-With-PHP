<?php
require("loginfunc.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css" />
    <title>Todo List</title>
</head>
<body>
    <div class="loginBox"> <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">
        <h3>Sign in here</h3>
        <form action="login.php" method="post">
            <div class="inputBox"> 
                <input id="uname" type="text" name="Username" placeholder="Username"> <input id="pass" type="password" name="Password" placeholder="Password"> 
            </div> 
            <input type="submit" name="" value="Login">
        </form> 
        <a href="#">Forget Password<br> </a>
        <a href="/Todo%20List%20With%20PHP/Registration/register.php">Sign-Up</a>
        
    </div>
</body>
</html>