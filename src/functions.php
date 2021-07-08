<?php

include '../config/database.php';

// This function checks register the beneficiary into the database

function beneficiary_reg($name, $email, $password, $dob, $phone_number, $state, $city, $personal_address, $address_code){

	global $db;

	$stmt = "INSERT INTO beneficiary (name, email, password, dob, phone_number, state, city, personal_address, address_code)
			 VALUES('$name', '$email', '$password', '$dob', '$phone_number', '$state', '$city', '$personal_address', '$address_code')";
	
	if ($db->query($stmt)) {
		header('Location: dashboard.php');
	} else {
		$errormsg = "Kindly fill out the required fields";
	}
}




?>