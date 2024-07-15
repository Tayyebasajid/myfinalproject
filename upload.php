<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "orderdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $number = $_POST['number'];
    $order_name = $_POST['order'];
    $additional_food = $_POST['additional_food'];
    $quantity = $_POST['quantity'];
    $datetime = $_POST['datetime'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    // Prepare and bind
    $sql = "INSERT INTO order(name, number, order_name, additional_food, quantity, datetime, address, message) VALUES ($name, $number, $order_name, $additional_food, $quantity, $datetime, $address, $message)";

    // Execute the statement
    if (mysqli_connect($sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

}

// Close the connection
mysqli_close($conn);
?>
