<?php

	class Beneficiary
	{
		private $dbHost = 'localhost';
		private $dbUsername   = 'root';
		private $dbPassword   = '';
		private $dbName   = 'fundme';
		public  $conn;


		// Database Connection 
		public function __construct()
		{
		    $this->conn = new mysqli($this->dbHost, $this->dbUsername,$this->dbPassword,$this->dbName);
		    if(mysqli_connect_error()) {
			 trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
		    }else{
			return $this->conn;
		    }
		}

		// Register Method
		public function Registration($post)
		{
			$name = $this->conn->real_escape_string($_POST['name']);
			$email = $this->conn->real_escape_string($_POST['email']);
			$password = $this->conn->real_escape_string(md5($_POST['password']));
            $dob = $this->conn->real_escape_string($_POST['dob']);
            $address = $this->conn->real_escape_string($_POST['address']);
            $state = $this->conn->real_escape_string($_POST['state']);
            $city = $this->conn->real_escape_string($_POST['city']);
            $addresscode = $this->conn->real_escape_string($_POST['addresscode']);
            $phone_number = $this->conn->real_escape_string($_POST['phone']);
            $comfirm = $this->conn->real_escape_string($_POST['comfirm']);

            if($name == "" || $address == "" || $email == "" || $password == "" || $state == "" || $city == "" || $addresscode == "" || $phone_number == "" || $dob == "" || $comfirm == ""){
                $errors = '<div class="alert alert-danger"><b>Warning!</b> Field must not be empty</div>';
                return $errors;
            }

            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                $errors = '<div class="alert alert-danger"><b>Warning!</b> Email address is not valid</div>';
                return $errors;
            }

                $ppassword = md5($password);
        $sql ="INSERT INTO beneficiary(name,email,password,dob,phone_number,state,city,personal_address,address_code) VALUES('$name','$email','$ppassword','$dob','$phone_number','$state','$city','$address','$addresscode')";
                    $sql = $this->conn->query($sql);
                    if ($sql==true) {
                        return '<div class="alert alert-Success"> Signup successful. Login to view dashboard.</div>';
                    }else{
                        return '<div class="alert alert-danger"> Signup failed. Please try again. </div>';
                    }

                    
            
			
		}
	}
  

    $user = new Beneficiary;
?>

