<?php
require('db.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login Page</title>
</head>
<body>

<?php

if (isset($_POST['submit'])){
    $email = stripslashes($_REQUEST['email']);
    
 $email = mysqli_real_escape_string($con,$email);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
        $query = "SELECT * FROM `beneficiary` WHERE email='$email'
and password='$password'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['email'] = $email;
            // Redirect beneficiary to dashboard
     header("Location: dashboard.php");
         }else{
 echo "<div class='form'>
<h3>Incorrect email or password</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
 }
    }else{
?>
<h1>Beneficiary login page</h1>
<form action="" method="POST" name="login">
<input type="text" name="email" placeholder="Enter your email" required /><br>
<input type="password" name="password" placeholder="Enter yor password" required /><br>
<input name="submit" type="submit" value="Login" />
</form>
<?php } ?>
</body>
</html>