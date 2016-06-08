<?php
session_start();

if (!isset($_SESSION['auth'])) {
    
header ("Location: login.php");

}
?>

<html>
  <head>
       <title> Home </title>
       <link rel="stylesheet" href="dist/css/bootstrap.css" type="text/css">
       <link rel="stylesheet" href="dist/css/bootstrap-theme.css" type="text/css">
       <link rel="stylesheet" href="homepage.css" type="text/css">
  </head>
  <body>
      <nav class="navbar navbar-default">
          <div class="container-fluid">
              
              
              <p class="navbar-text navbar-right">
                  Signed in as <a href="#" class="navbar-link"><?php echo $_SESSION['username']; ?></a> | <a href="logout.php">Log Out</a>
              </p>
          </div>
      </nav>
      
      <div class="container">
          <div class="jumbotron">
              <h1>Welcome <?php echo $_SESSION['username']; ?></h1> <br>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti reprehenderit consectetur nostrum ut dignissimos ratione vel? Laudantium accusamus voluptate distinctio error accusantium qui consequatur, recusandae nulla reprehenderit ad numquam dolor!</p>
          </div>
      </div>
</body>
</html>