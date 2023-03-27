<?php
// Get the submitted user name
$user_name = $_POST['user_name'];

// Create a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the delete statement
$stmt = $conn->prepare("DELETE FROM users WHERE username = ?");
$stmt->bind_param("s", $user_name);
$result = $stmt->execute();

// Check if the delete operation was successful
if ($result === true) {
  echo "User removed successfully.";
} else {
  echo "Error removing user: " . $stmt->error;
}

// Close the database connection
$stmt->close();
$conn->close();
?>
