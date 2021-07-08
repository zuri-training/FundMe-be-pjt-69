<?php

require '../config/database.php';

// This function checks registers the beneficiary into the database
function beneficiary_reg($fullname, $email, $password, $dob, $address, $country, $phone, $address, $addcode)
{
    
}

// This function logs in the donor
function login_donor()
{
    global $db; 

   // initialize session
	session_start();

    // get donor log in details
	$email = $_POST['email'];
	$password = $_POST['password'];
    $name = $_POST['name'];

    // attempt  donor login
    $query = "SELECT * FROM donors WHERE email='$email' AND password='$password'";
	$results = mysqli_query($db, $query);

    // checking if donor is found

    // donor found
    if (mysqli_num_rows($results) == 1) 
    {   
        $_SESSION["user"] = $name;  // set session variable to donor name
        // redirect user to their dashboard
        header('location: ..donors-dashboard/dashboard.html'); // redirect page needs to be corrected
    }
    // donor not found
    else
    {
        // redirect user to signup page
        header('location: ..log in and sign up/signup.html'); // redirect page needs to be corrected
    }

// This function logs in the beneficiary
function login_beneficiary()
{
    global $db;  

    // initialize session
	session_start();

    // get beneficiary log in values
	$email = $_POST['email'];
	$password = $_POST['password'];
    $name = $_POST['name'];

    // attempt benefiiary login
    $query = "SELECT * FROM beneficiary WHERE email='$email' AND password='$password'";
	$results = mysqli_query($db, $query);

    // checking if beneficairy is found

    // beneficiary found
    if (mysqli_num_rows($results) == 1) 
    {   
        $_SESSION["user"] = $name;  // set session variable to beneficairy name
        // redirect user to their dashboard
        header('location: index.html'); // redirect page needs to be corrected
    }
    // beneficairy not found
    else
    {
        // redirect user to signup page
        header('location: ..log in and sign up/signup.html'); // redirect page needs to be corrected
    }
 }

}


?>

