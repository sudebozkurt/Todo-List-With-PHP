<?php
include 'database.php';

$id = $_GET['id'];

$sql = "SELECT * FROM todos WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

if ($stmt) {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $title = $row['title'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $newTitle = $_POST['title'];

    $updateSql = "UPDATE todos SET title = :newTitle WHERE id = :id";
    $updateStmt = $pdo->prepare($updateSql);
    $updateStmt->bindParam(':newTitle', $newTitle, PDO::PARAM_STR);
    $updateStmt->bindParam(':id', $id, PDO::PARAM_INT);
    $updateResult = $updateStmt->execute();

    if ($updateResult) {
        echo '<div class="alert alert-success">Task updated successfully.</div>';
        
        header("Location: todo.php");
        exit; 
    } else {
        echo '<div class="alert alert-danger">Error updating task.</div>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo List - Update Task</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <h1 class="text-center my-4 py-4">Update Task</h1>

  <div class="w-50 m-auto">
    <form action="edit.php?id=<?php echo $id; ?>" method="post">
      <label for="title">New Task Title</label>
      <input class="form-control" type="text" name="title" id="title" required placeholder="Update Task" value="<?php echo $title; ?>"> <br/>
      <button class="btn btn-success" type="submit">Update Task</button>
    </form>
  </div>

</body>
</html>
