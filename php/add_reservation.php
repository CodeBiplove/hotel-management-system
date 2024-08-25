<?php
include 'db_connect.php';

$name = $_POST['name'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$duration = $_POST['duration'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];

// Insert reservation into database
$sql = "INSERT INTO reservations (name, address, contact, duration, checkin, checkout)
        VALUES ('$name', '$address', '$contact', '$duration', '$checkin', '$checkout')";

if ($conn->query($sql) === TRUE) {
    echo "Reservation added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
