<?php
   include 'database.php';
   $id = $_GET['id'];
   
   $sql = "DELETE FROM todos WHERE id = :id";
   $stmt = $pdo->prepare($sql);
   $stmt->bindParam(':id', $id, PDO::PARAM_INT);
   
   if ($stmt->execute()) {
       header("location: ./todo.php");
   } else {
       echo "Silme işlemi başarısız oldu.";
   }
   
?>