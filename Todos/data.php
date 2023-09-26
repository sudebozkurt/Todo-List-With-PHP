<?php
    $todo = $_POST['title'];
    include 'database.php';

    $sorgu = $pdo->prepare("INSERT INTO todos (user_id, title) VALUES (?, ?)");
    $result = $sorgu->execute([$_SESSION["id"], $todo]);

    if($result){
        header("location: ./todo.php");
    } else {
    }
?>
