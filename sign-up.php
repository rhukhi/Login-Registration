<?php
    session_start();
     
     if($_SERVER['REQUEST_METHOD'] == 'POST') {
         
         $prevUsername = isset($_SESSION['RegUsername']) ? $_SESSION['RegUsername'] : '';
         
     if($_POST['username'] === $prevUsername ) {
         $_SESSION['scream'] = "Username " . $_POST['username'] . " is already taken";
     }
     else{
        if($_POST['password'] != $_POST['c_password'])  {
            $_SESSION['scream'] = "The Passwords don't match";
        }
        else {
              
         $uname = isset($_POST['username']) ? trim($_POST['username']) : '';
         $password = isset($_POST['password']) ? trim($_POST['password']) : '';
         $cPassword = isset($_POST['c_password']) ? trim($_POST['c_password']) : '';
         
         if(!empty($uname) && !empty($password) && !empty($cPassword)){
 
              $uname = htmlentities($_POST['username']);
              $password = htmlentities($_POST['password']);

              $_SESSION['RegUsername'] = $uname;
              $_SESSION['RegPassword'] = $password;
              
              $registeredUsers = isset($_SESSION['registeredUsers']) ? $_SESSION['registeredUsers'] : [];
              
              array_push($registeredUsers, [$uname => $password]);
              $_SESSION['registeredUsers'] = $registeredUsers;
              
              $_SESSION['alert'] = "Thanks for registering! <br />";
              
              header('Location: login.php');
          }

           else {
               echo "Please fill out all fields! <br />";
           }
        }
     }
     }
     
?>

<html>
<head>
    <title>Registration Page</title>
    <link rel="stylesheet" href="dist/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="dist/css/bootstrap-theme.css" type="text/css">
    <link rel="stylesheet" href="sign-up.css">
</head>

<body>
    <div class="container" style="padding-top:150px">
        <div class="row">
            <div class="col-md-3 left-nav"></div>
        
            <div class="col-md-6 center-nav">
                <div class="panel panel-default" content-align= "center">
                    <div class="panel-heading">
                        <p class="panel-title"><em><font face="Georgia, Times New Roman, Times, serif"><strong>Registration</strong></font></em></p></div>
                        <div class="panel-body">
                            <form action="sign-up.php" method="post">
                                <?php if(isset($_SESSION['scream'])) {  ?>
                                <?php if($_SESSION['scream'] != '') {  ?>
                                <div class="alert alert-danger">
                                    <?php echo  $_SESSION['scream'];  $_SESSION['scream'] = '' ?>
                                </div> 
                                <?php } ?>
                                <?php } ?>
                            <p><em><font face="Georgia, Times New Roman, Times, serif"><strong>Enter User Name</strong></font></em></p>
                            <input type="text" name="username" style="background" /><br><br>
                            <p><em><font face="Georgia, Times New Roman, Times, serif"><strong>Enter Password</strong></font></em></p>
                            <input type="password" name="password" style="background" /><br><br>
                            <p><em><font face="Georgia, Times New Roman, Times, serif"><strong>Confirm Password</strong></font></em></p>
                            <input type="password" name="c_password" style="background" /><br><br>
                            <br>
                            <input class="button" type="submit" value="Submit" name="ok" align="right" />
                            <input name="reset" type="reset" value="Cancel"/><br><br>
                            <p>Have an account? <strong><em><a href="login.php">Login</a></em></strong></p>
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