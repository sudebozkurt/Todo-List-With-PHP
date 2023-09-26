<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["search"])) {
    $searchText = $_POST['search'];

    $sql = "SELECT * FROM todos WHERE title LIKE :searchText";
    $stmt = $pdo->prepare($sql);
    $searchText = '%' . $searchText . '%'; 
    $stmt->bindParam(':searchText', $searchText, PDO::PARAM_STR);
    $stmt->execute();
    
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $id = $row['id'];
            $title = $row['title'];
            echo '<tr>
                    <td>' . $title . '</td>
                    <td>
                      <a class="btn btn-success btn-sm" href="edit.php?id=' . $id . '" role="button">Edit</a>
                      <a class="btn btn-danger btn-sm" href="delete.php?id=' . $id . '" role="button">Delete</a>
                      <a class="btn btn-danger btn-sm" href="todo.php" role="button">Back</a>
                    </td> <br/>
                  </tr>';
        }
    } else {
        echo "Arama sonucu bulunamadı.";
    }
} else {
    $sql = "SELECT * FROM todos";
    $result = $pdo->query($sql);
    if ($result) {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $id = $row['id'];
            $title = $row['title'];
            echo '<tr>
                    <td>' . $title . '</td>
                    <td>
                      <a class="btn btn-success btn-sm" href="edit.php?id=' . $id . '" role="button">Edit</a>
                      <a class="btn btn-danger btn-sm" href="delete.php?id=' . $id . '" role="button">Delete</a>
                      <a class="btn btn-danger btn-sm" href="todo.php" role="button">Back</a>
                    </td>
                  </tr>';
        }
    } else {
        echo "Hata: Veritabanından veriler alınamadı.";
    }
}
?>
