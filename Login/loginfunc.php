<?php
require_once '../Todos/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["Username"];
    $password = $_POST["Password"];
    $sorgu = $pdo->prepare("SELECT * FROM user WHERE user_username = ? AND user_password = ?");
    $result = $sorgu->execute([$username, $password]);

    if ($result) {
        $user = $sorgu->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;
            $_SESSION["id"] = $user["user_id"];
            header("location: /Todo%20List%20With%20PHP/Todos/todo.php");

            exit;
        } else {
            echo "Hatalı kullanıcı adı veya şifre.";
        }
    } 
}
?>
