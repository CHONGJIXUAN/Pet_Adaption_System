<?php
// Retrieve the pet name and status values from the form
$pet_name = $_POST['pet_name'];
$status = $_POST['status'];

// Create a new database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adoption_application";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection is successful
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Update the status of the adoption application in the database
$sql = "UPDATE adoption_applications SET status='$status' WHERE pet_name='$pet_name'";

if (mysqli_query($conn, $sql)) {
  // Display a success message if the status is updated successfully
  if ($status == 'approve') {
    echo "The adoption application for $pet_name has been approved.";
  } else if ($status == 'reject') {
    echo "The adoption application for $pet_name has been rejected.";
  }
} else {
  // Display an error message if the status update fails
  echo "Error updating status: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
