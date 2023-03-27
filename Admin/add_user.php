<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	// Connect to database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "login";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	// Retrieve form data
	$username = $_POST["username"];
	$password = $_POST["password"];
	$email = $_POST["email"];

	// Insert new user into database
	$sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
	if (mysqli_query($conn, $sql)) {
		// User added successfully
		echo "User added successfully!";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
}

?>
