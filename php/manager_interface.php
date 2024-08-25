<?php
include 'db_connect.php';

$roomnumber = $_POST['roomnb'];
$roomtype = $_POST['rmtype'];
$availability = isset($_POST['available']) ? 1 : 0;

// Insert room into database
$sql = "INSERT INTO rooms (roomnb, rmtype, available)
        VALUES ('$roomnb', '$rmtype', '$available')";

if ($conn->query($sql) === TRUE) {
    echo "Room added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
