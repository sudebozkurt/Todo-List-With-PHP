<?php 
  include 'database.php';
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container">
          <a class="navbar-brand" href="/Todo%20List%20With%20PHP/Home%20Page/homepage.php">Todo List</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <a class="nav-link" href="/Todo%20List%20With%20PHP/Todos/todo.php">My Todo's</a>
              </li>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/Todo%20List%20With%20PHP/Login/logout.php">Logout</a>
              </li>
            </ul>
            </header>

  <br><h1 class="text-center my-4 py-4">My Todo's</h1>

  <div class="w-50 m-auto">
  <form action="data.php" method="post">
    <input class="form-control" type="text" name="title" id="title" required placeholder="Enter Task"> <br/>
    <button class="btn btn-success">Add Task</button> </form>
  <form action="filter.php" method="POST" class="text-end">
    <div class="w-50 m-auto">
      <input type="text" name="search" id="search" required placeholder="Filter">
      <button type="submit" class="btn btn-secondary">Filter</button>
    </div>
  </form>

</div>
  </div><br>
  <hr class="bg-dark w-50 m-auto"> 
  <div class="w-50 m-auto">
    <table class="table table-light table-hover">
  <thead>
    <tr>
      <th scope="col">Tasks</th> 
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if(isset($_SESSION["id"])){
        $sorgu = $pdo -> prepare("SELECT * FROM todos WHERE user_id=?");
        $result = $sorgu -> execute([$_SESSION["id"]]);
        $todos = $sorgu -> fetchAll(PDO::FETCH_ASSOC);

        foreach($todos as $todo){ ?>
          <tr>
        <td><?php echo $todo["title"] ?></td>
        <td>
            <a class="btn btn-success btn-sm" href="edit.php?id=<?php echo $todo["id"] ?>" role="button">Edit</a>
            <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $todo["id"] ?>" role="button">Delete</a>

        </td>
      </tr>
      <?php
        }
      }
      else{
        header("location:/Todo%20List%20With%20PHP/Login/login.php");
      }
      ?>

      
    
  </tbody>
</table>
  </div>

</body> 