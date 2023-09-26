<?php
session_start();
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=todoapp;charset=UTF8", "root","");
    }
    catch(PDOException $hata){
        echo "Bağlantı Hatası". $hata->getMessage();
        die();
    }
?>