<?php
session_start();
try{
    $databaseBaglantisi = new PDO("mysql:host=localhost;dbname=todoapp;charset=UTF8", "root", "");
}
catch(PDOException $hata){
    echo "Bağlantı Hatası<br />" . $Hata->GetMessage();
	die();
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

    <title>Todo List</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
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
              <li class="nav-item active">
                <a class="nav-link" href="homepage.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/Todo%20List%20With%20PHP/Login/login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/Todo%20List%20With%20PHP/Registration/register.php">Sign Up</a>
              </li>
            </ul>
            </header>

    <main role="main">
      <div class="container marketing">
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">This's a todo app. <span class="text-muted">You wont't forget anything anymore.</span></h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida in fermentum et sollicitudin ac orci phasellus. Lorem dolor sed viverra ipsum nunc aliquet bibendum. In hendrerit gravida rutrum quisque non tellus orci. Augue interdum velit euismod in pellentesque.</p>
          </div>
          <div class="col-md-5">
            <br> <br> <br>
            <img src="https://www.amitree.com/wp-content/uploads/2021/08/the-pros-and-cons-of-paper-to-do-lists.jpeg" class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Todo App">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">You can plan your day better. <span class="text-muted">You can do it.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <br><br>
            <img src="https://leaderonomics-storage.s3.ap-southeast-1.amazonaws.com/plan_sketch_pic_ac2c51_67d6c8e000.jpeg" class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; Sude Bozkurt &middot; <a href="https://github.com/sudebozkurt">Github</a></p>
      </footer>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>
