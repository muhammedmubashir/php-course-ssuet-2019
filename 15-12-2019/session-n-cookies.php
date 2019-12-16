<?php
//session & Cookies

// what is session 
// user roll

// session 
// login session id 
// next 




// 1. ecommerce 

// basic info 
// shipment details
// billing details 

// credit card 


// SESSION 

// distributed architecture 

// aws cloud 

// loadbalancer -> round robin 

// serverA ServB

// client


// 1 week solution 
// PHP HARD COPY 
$user_logged_in = true;
if($user_logged_in)
{
	session_start();
	header("Location: home.php");
}
else
{
	header("Location: login.php");
}

?>