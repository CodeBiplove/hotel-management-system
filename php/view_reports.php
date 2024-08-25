<?php
include 'db_connect.php';

// Example query for monthly reports
$sql = "SELECT * FROM reservations WHERE MONTH(checkin) = MONTH(CURRENT_DATE())";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Monthly Reports</h2>";
    echo "<table><tr><th>Name</th><th>Address</th><th>Contact</th><th>Check-In</th><th>Check-Out</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["address"]. "</td><td>" . $row["contact"]. "</td><td>" . $row["checkin"]. "</td><td>" . $row["checkout"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No reservations found for this month.";
}

$conn->close();
?>
