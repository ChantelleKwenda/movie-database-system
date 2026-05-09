<?php
include 'db.php';

$name = $_POST['name'];
$dob = $_POST['dob'];

$sql = "INSERT INTO Actor (name, dob) VALUES ('$name', '$dob')";

if ($conn->query($sql) === TRUE) {
    echo "Actor inserted successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>