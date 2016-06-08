<?php

session_start();

unset($_SESSION['auth']);

$_SESSION['back'] = 'You have been logged out. <a href="index.html">Go back</a>';

?>

<html>
    <head>
        <title>Logout Page</title>
        <link rel="stylesheet" href="dist/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="dist/css/bootstrap-theme.css" type="text/css">
        <link rel="stylesheet" href="logout.css" type="text/css">
    </head>
    <body><br>
        <div class="container">
            <div class="jumbotron">
                <h3><?php echo $_SESSION['back']; ?></h3>
            </div>
        </div>
    </body>
</html>