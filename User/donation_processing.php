<?php

// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "donation");

// Check the database connection
if(!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the donation information from the HTTP POST request
$name = $_POST['name'];
$email = $_POST['email'];
$amount = $_POST['amount'];
$payment_method = $_POST['payment_method'];

// Validate the donation information
if(empty($name) || empty($email) || empty($amount) || empty($payment_method)) {
	die("Error: Please fill in all required fields.");
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	die("Error: Invalid email format.");
}

if(!is_numeric($amount) || $amount <= 0) {
	die("Error: Invalid donation amount.");
}

// Insert the donation information into the database
$sql = "INSERT INTO donations (name, email, amount, payment_method, donation_date)
		VALUES ('$name', '$email', '$amount', '$payment_method', NOW())";

if(mysqli_query($conn, $sql)) {
	// If the donation is inserted successfully, show a success message
	echo "<p>Thank you for your donation of $amount.</p>";
} else {
	// If there's an error, show an error message
	echo "<p>Error: " . mysqli_error($conn) . "</p>";
}

// Close the database connection
mysqli_close($conn);

?>
