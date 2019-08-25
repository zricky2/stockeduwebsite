<?php

session_start();

//initialize variables
$msg = $_GET["msg"];
$errors = array(); // keeps the number of errors in an array

//connect to database

$db = mysqli_connect('localhost', 'root','','messages') 
    or die("Could not conect to database");

// escape variables for security
//Escapes special characters in a string for use in an SQL statement

$username = mysqli_real_escape_string($db, $_SESSION['username']);
$message = mysqli_real_escape_string($db, $msg);



//form validation // check if input is empty
if(empty($message)) {
    array_push($errors, "Message is required");
}
// if no errors then insert data
if(count($errors) == 0) {
    
    //put the info in query
    $_query = "INSERT INTO message (username, msg) VALUES ('$username', '$message')";
    
    // run query on database. Die if error occcurs
    if (!mysqli_query($db, $_query)) {
        die ("Message was not stored");
    } 
} 