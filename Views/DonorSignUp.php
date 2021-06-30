<?php

    // Include database file
    include '../Controller/donorsignup.class.php';

    $donorObj = new Donors();

    // Insert Record in donors table
    if(isset($_POST['submit'])) {
        $donorObj->insertData($_POST);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="oplogssign.css">
   
</head>
<body>

    <div class="container">
        <div class="right-side signUp">
            <section class="overlay-text">
                <img src="images/logowhitex.png" alt="" class="one">
                <p>Already have a FundMe Account?</p>
                <a href="logIn.html"><button class="signUpLink">Log In</button></a>
                <form action="DonorSignUp.php" method="POST">
            </section>
        </div>
        
        <div class="left-side">
           
            <div class="header">
                <img src="images/Logo (SVG).png" alt="">
                <p>Create a donor account</p>
            </div>

            <div class="logInfield">
                    <label for="name">Full Name</label>
                    <input type="text"  name="name" class="editable" placeholder="Your Full Name" required="true">
                    <label for="Email">Email</label>
                    <input type="email" name="email" class="editable" placeholder="Your Email" required="true">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="editable" placeholder="******" required>
                    <label for="dob">Date Of Birth</label>
                    <input type="date" name="dob" class="editable" required>
                    <label for="address">Full Address</label>
                    <textarea id="full_address" name="address" class="editable" rows="3" cols="40" 
                    placeholder="Please enter your full address that includes your city and state of residence." required></textarea>
                    <label for="phone">Phone Number</label>
                    <small><i>Format: 080-1234-5678</i></small>
                    <input type="tel" id="phone" name="phone_number" pattern="[0]{1}[7-9]{1}[0-9]{1}-[0-9]{4}-[0-9]{4}" 
                    class="editable" required>
                    
                    <p class="signMsg">By signing up, you confirm that you have read and accepted our <a href="">User Terms</a> and <a href="">Privacy Policy</a></p>
                    <button class="logIn-btn" name="submit">Sign up</button>

                    <p class="wrap"><span>or</span></p>
                    <div class="socialBtns">
                        <button type="submit" class="logBtns">
                            <img src="images/google-icon 1.svg" alt="Google icon" class="gicon">
                            <p>Continue with Google</p>
                        </button>
                        
                        <button type="submit" class="logBtns">
                            <img src="images/Rectangle 17.svg" alt="Google icon" class="gicon">
                            <p>Continue with Facebook</p>
                        </button>
                </form>
            </div>
                <div class="alternative">
                    <p>Have an existing account?<a href="/FundMe-fe-pjt-69/log in and sign up/logIn.html">log in</a></p>
                </div>
            </div>
        </div>
    
    </div>

    <script>
        // A confirmation notification before form submission.

		 var form = document.querySelector("form");
		 form.onsubmit = function() {
		 	return confirm("Are you sure form details are correct?");
         };
    </script>

</body>
</html>