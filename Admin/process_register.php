<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	// Connect to database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "admin_login";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	// Retrieve form data
	$username = $_POST["username"];
	$password = $_POST["password"];
	$confirm_password = $_POST["confirm_password"];
	$email = $_POST["email"];

	// Check if username already exists in database
	$sql = "SELECT * FROM admin_login WHERE username = '$username'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		// Username already exists
		echo "Username already exists. Please choose a different username.";
	} else {
		// Username does not exist
		if ($password == $confirm_password) {
			// Insert new user into database
			$sql = "INSERT INTO admin_login (username, password, email) VALUES ('$username', '$password', '$email')";
			if (mysqli_query($conn, $sql)) {
				// Registration successful
				echo "Registration successful!";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		} else {
			// Passwords do not match
			echo "Passwords do not match. Please try again.";
		}
	}

	mysqli_close($conn);
}

?>
