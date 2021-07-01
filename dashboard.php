<?php
session_start();
include('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
</head>
<body>
<h1>Beneficiary Dashboard</h1>
<?php
$email = $_SESSION["email"];

echo "Welcome " .$email; ?><br><?php
$query = "SELECT * from beneficiary where email = '$email'";
$result = mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);

echo $row ['name']


?>

<br>
<a href="logout.php">Logout</a></p>
</div>
</body>
</html>