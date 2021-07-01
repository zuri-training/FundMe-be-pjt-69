<?php
session_start();
//Destroy all sessions
if(session_destroy())
{
//Redirect to Login page
header("Location: login.php");
}
?>