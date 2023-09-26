<?php
require("config.php");
require("functions.php");

    if($_POST){
        $name = security($_POST["name"]);
        $mail = security($_POST["mail"]);
        $username = security($_POST["username"]);
        $pass_one = security($_POST["pass-one"]);
        $pass_two = security($_POST["pass-two"]);

        if((!$name) or (!$mail) or (!$username) or (!$pass_one)) {
            echo '<span style="color:red;"> Please fill in the required fields. </span>';
        }
        elseif($pass_one != $pass_two){
            echo '<span style="color:red;">The passwords do not match.</span>';
        }
        else{
            $user = $databaseBaglantisi->prepare("SELECT * FROM user WHERE user_username=? or user_email=?");
            $user -> execute(array($username, $mail));
            $user->fetchAll(PDO::FETCH_ASSOC);
            $x = $user->rowCount();

            if($x){
                echo '<span style="color:red;">This username or email has been used before.</span>';
                die();
            }
            else{
                $password = $pass_one;
                $register = $databaseBaglantisi->prepare("INSERT INTO user SET user_fullname=?, user_username=?, user_email=?, user_password=? ");
                $z = $register->execute(array($name, $username, $mail, $password));
                if($z){
                    echo '<span style="color:blue;">Registration completed successfully.</span>
                    <a class="nav-link" href="/Todo%20List%20With%20PHP/Login/login.php">Login</a>';
                    die();
                }
                else{
                    echo '<span style="color:red;">An error occurred during registration.</span>';
                    die();
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"/>
    <title>Todo List Registration</title>
    <link rel="stylesheet" type="text/css" href="register.css" />
</head>
<body>
<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-lg-5 col-md-7">
            <div class="panel border bg-white">
            <div class="panel-heading text-center">
                <h3 class="pt-3 font-weight-bold">Sign-up</h3>
            </div>
                <div class="panel-body p-3">
                    <form action="" method="POST">
                    <div class="input-field">
                        <input name="name" type="text" placeholder="Fullname" required>
                    </div>

                    <div class="input-field">
                        <input name="username"  type="text" placeholder="Username" required>
                    </div>

                    <div class="input-field">
                        <input name="mail"  type="email" placeholder="Email" required>
                    </div>

                    <div class="input-field">
                        <input name="pass-one" type="password" placeholder="Password" required>
                    </div>

                    <div class="input-field">
                        <input name="pass-two" type="password" placeholder="Confirm password" required>
                    </div>

                        <div>
                            <button type="submit" class="btn btn-register">Register</button>
                        </div>

                        <div class="text-center pt-4 text-muted">Do you already have an account? <a href="/Todo%20List%20With%20PHP/Login/login.php">Login</a> </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>


