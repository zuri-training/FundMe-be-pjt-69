<?php

include '../config/database.php';

// This function checks register the beneficiary into the database

function beneficiary_reg($name, $email, $password, $dob, $phone_number, $state, $city, $personal_address, $address_code){

	global $db; // State the database as a global entity

	$stmt = "INSERT INTO beneficiary (name, email, password, dob, phone_number, state, city, personal_address, address_code)
			 VALUES('$name', '$email', '$password', '$dob', '$phone_number', '$state', '$city', '$personal_address', '$address_code')";
	
	// If insertion was successful, the user is redirected
	if ($db->query($stmt)) {
		$_SESSION['loggedin'] = true;
		header('Location: dashboard.php');
	} else {
		$errormsg = "Kindly fill out the required fields";
	}
}



function beneficiary_login($email, $password){
	global $db;

	$comm = "SELECT * FROM beneficiary WHERE email = '$email' AND password = '$password' ";

	if ($result = $db->query($comm)) {
		
		//Prints out the database rows
		$row = $result->fetch_assoc();
		var_dump($row);
	}
	
}

beneficiary_login('email@email.com', 'zxcvbnm');


?>