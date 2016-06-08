<?php 
session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
         
     $uname = $_POST['username'];
     $pword = $_POST['password'];
     
     $regUsername = $_SESSION['RegUsername'];
     $regPassword = $_SESSION['RegPassword'];

      if($uname === $regUsername && $pword === $regPassword)
      {    
          
          $_SESSION['username'] = $uname;
          $_SESSION['auth'] = 'odbc_fetch_object';
          
          header("Location:homepage.php");
        }
        else
        {
          $_SESSION['scream'] = "invalid UserName or Password"; 
        }
        
   }
 ?>

<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="dist/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="dist/css/bootstrap-theme.css" type="text/css">
    <script>
        document.onkeydown = function(evt) {
            var keyCode = evt ? (evt.which ? evt.which : evt.keyCode) : event.keyCode;
            if (keyCode == 13) {
                document.test.submit();
            }
        }
    </script>
</head>

<body>

    <div class="container" style="padding-top: 150px">
        <div class="row">
            <div class="col-md-3 left-nav">
            </div>

            <div class="col-md-6 center-nav">
                <div class="panel panel-default" content-align="center">
                    <div class="panel-heading">
                        <p class="panel-title"><em><font face="Georgia, Times New Roman, Times, serif"><strong>Login</strong></font></em></p>
                    </div>
                    <div class="panel-body">
                        <form action="" method="post">
                            <?php if(isset($_SESSION['alert'])) {  ?>
                            <?php if($_SESSION['alert'] != '') {  ?>
                            <div class="alert alert-success">
                                <?php echo  $_SESSION['alert'];  $_SESSION['alert'] = '' ?>
                            </div>
                            <?php } ?>
                            <?php } ?>

                            <?php if(isset($_SESSION['scream'])) {  ?>
                            <?php if($_SESSION['scream'] != '') {  ?>
                            <div class="alert alert-danger">
                                <?php echo  $_SESSION['scream'];  $_SESSION['scream'] = '' ?>
                            </div>
                            <?php } ?>
                            <?php } ?>
                            <p><em><font face="Georgia, Times New Roman, Times, serif"><strong>User Name</strong></font></em></p>
                            <input type="text" name="username" style="background" /><br><br>
                            <p><em><font face="Georgia, Times New Roman, Times, serif"><strong>Enter Password</strong></font></em></p>
                            <input type="password" name="password" style="background" />
                            <br><br>
                            <a href="homepage.php"><input class="button" type="submit" name="login" value="LOGIN" /></a>
                            <input name="reset" type="reset" value="Cancel" /><br><br>
                            <p>Don't have an account? <em><strong><a href="sign-up.php">Sign-Up Here</a></strong><em></p>
                            <a href="index.html" class="boom"><u>Back</u></a>
                            </form>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>