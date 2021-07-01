<?php 
require_once "../controller/Database.php";

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $Reg = $user->Registration($_POST);
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Register</title>
</head>
<body>
<?php   if(isset($Reg)){
     echo $Reg;
                    }
                   
                ?>
    <form action="" method="POST">
    <label>Name</label><br>
        <input type="text" name="name"><br>
        <label>Email</label><br>
        <input type="email" name="email"><br>
        <label>State</label><br>
        <input type="text" name="state"><br>
        <label>City</label><br>
        <input type="text" name="city"><br>
        <label>Address</label><br>
        <input type="text" name="address"><br>
        <label>Address Code</label><br>
        <input type="text" name="addresscode"><br>
        <label>Phone</label><br>
        <input type="text" name="phone"><br>
        <label>Date of birth</label><br>
        <input type="date" name="dob"><br>
        <label>Password</label><br>
        <input type="password" name="password"><br>
        <label>Confirm Password</label><br>
        <input type="password" name="comfirm"><br><br>
        <input  type="submit" name="submit">
    </form> 
