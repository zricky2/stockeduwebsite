<?php 
session_start();
//connect to database
$db = mysqli_connect('localhost', 'root','','Bullish Channel') 
    or die("Could not conect to database");

$_SESSION['status'] = "Offline";
$email = $_SESSION['email'];
$query = "UPDATE users SET stat = 'Offline' WHERE email = '$email' ";

if (!mysqli_query($db, $query)) {
    die ("Did not log out properly");
} 
// remove all session variables
//session_unset($_SESSION('username')); 

// destroy the session 
session_destroy(); 

header('location: index.html');




?>