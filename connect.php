<?php
$conn = new mysqli('localhost', 'root', '', 'foodie');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$number = $_POST['number'];
$order = $_POST['order'];
$additional = $_POST['additional'];
$howmuch = $_POST['howmuch'];
$date = $_POST['date'];
$address = $_POST['address'];
$message = $_POST['message'];

// Use backticks around `order` since it's a reserved keyword
$sql = "INSERT INTO `order` (name, howmuch, address, number, additional, dateandtime, message, `order`) 
        VALUES ('$name', '$howmuch', '$address', '$number', '$additional', '$date', '$message', '$order')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Details Added');window.location.href='index.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


