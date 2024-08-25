<?php
session_start();
include 'db_connect.php';  // Correct path to db_connect.php

$username = $_POST['username'];
$password = $_POST['password'];

// Define correct credentials
$correct_username = 'Azurehavenresort';
$correct_password = 'Azurehavenresort1';

// Check credentials
if ($username === $correct_username && $password === $correct_password) {
    $_SESSION['loggedin'] = true;
    // Redirect to Room Availability or Front Desk Home based on choice
    header("Location: ../index.html"); // Redirect to Front Desk Home
    // Uncomment the following line to redirect to Room Availability
    // header("Location: ../room_booking.html"); 
    exit();
} else {
    echo "Invalid username or password";
}
?>

