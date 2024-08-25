<?php
include 'db_connect.php';

$guestname = $_POST['guestname'];
$service = $_POST['service'];
$quantity = $_POST['quantity'];

// Insert service request into database
$sql = "INSERT INTO services (guestname, service, quantity)
        VALUES ('$guestname', '$service', '$quantity')";

if ($conn->query($sql) === TRUE) {
    echo "Service request added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
