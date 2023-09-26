<?php
try{
    $databaseBaglantisi = new PDO("mysql:host=localhost;dbname=todoapp;charset=UTF8", "root", "");
}
catch(PDOException $hata){
    echo "Bağlantı Hatası<br />" . $Hata->GetMessage();
	die();
}
?>