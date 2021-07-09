<?php

require '../config/database.php';

// This function checks registers the beneficiary into the database
function beneficiary_reg($fullname, $email, $password, $dob, $address, $country, $phone, $address_, $addcode) {

  	}
//Query database for campaign records

$query = "SELECT * FROM campaign";

$result = mysqli_query($db, $query);
                        
if (mysqli_num_rows($result) > 0) {

//Display records from each row
        while ($row = mysqli_fetch_array($result)) {

          
          echo $row['id'];
          echo $row['title'];
          echo $row['description'];
          echo $row['progress bar'];
          echo $row['target']; 
        }
     } 
else{
//No records from database
	echo "no records";}

?> 
