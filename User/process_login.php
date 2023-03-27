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

	// Validate login credentials
	$sql = "SELECT * FROM users WHERE (username = '$username' OR email = '$email') AND password = '$password'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) == 1) {
		// Login successful
		session_start();
		$_SESSION["username"] = $username;
		header("Location: index.php");
		exit();
	} else {
		// Login unsuccessful
		echo "Invalid username, email, or password. Please try again.";
	}

	mysqli_close($conn);
}

?>
