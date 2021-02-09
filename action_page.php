<?php

include("connection.php");

$radio = mysqli_real_escape_string($conn, $_POST['radio']);
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$budget = mysqli_real_escape_string($conn, $_POST['budget']);
$username = mysqli_real_escape_string($conn, $_POST['uname']);
$password = mysqli_real_escape_string($conn, $_POST['pword']);

 
// Attempt insert query execution
$sql = "INSERT INTO user(u_field, u_name, u_email, u_phone, u_budget, username, pasword) VALUES ('$radio', '$name', '$email', '$phone', '$budget', '$username', '$password')";
if(mysqli_query($conn, $sql)){
    echo "</br>";  
    echo "\n Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
// Close connection
mysqli_close($conn);