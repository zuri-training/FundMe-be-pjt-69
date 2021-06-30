<?php

	class Donors
	{
		private $servername = "localhost";
		private $username   = "root";
		private $password   = "";
		private $database   = "fundme";
		public  $con;


		// Database Connection 
		public function __construct()
		{
		    $this->con = new mysqli($this->servername, $this->username,$this->password,$this->database);
		    if(mysqli_connect_error()) {
			 trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
		    }else{
			return $this->con;
		    }
		}

		// Insert donor data into donors table
		public function insertData($post)
		{
			$name = $this->con->real_escape_string($_POST['name']);
			$email = $this->con->real_escape_string($_POST['email']);
			$password = $this->con->real_escape_string(md5($_POST['password']));
            $dob = $this->con->real_escape_string($_POST['dob']);
            $address = $this->con->real_escape_string($_POST['address']);
            $phone_number = $this->con->real_escape_string($_POST['phone_number']);
			$query="INSERT INTO donors(name,email,password,dob,address,phone_number) VALUES('$name','$email','$password',
            '$dob','$address','$phone_number')";
			$sql = $this->con->query($query);
			if ($sql==true) {
                echo " <script> alert('Donor signup successful. Login to view dashboard.'); </script>";
			}else{
			    echo "<script> alert('Registration failed. Please try again.'); </script>";
			}
		}
	}
  
?>

