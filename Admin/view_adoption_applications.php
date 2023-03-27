<?php
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "adoption_application");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Query to get all adoption applications
$sql = "SELECT * FROM adoption_applications";

// Execute query
$result = mysqli_query($conn, $sql);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
  // Display adoption applications in a table
  echo "<h1>Adoption Applications</h1>";
  echo "<table>";
  echo "<tr><th>Name</th><th>Email</th><th>Phone</th><th>Pet Name</th><th>Status</th><th>Action</th></tr>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['phone'] . "</td>";
    echo "<td>" . $row['pet_name'] . "</td>";
    echo "<td>" . $row['status'] . "</td>";
    echo "<td><a href='process_adoption.php?id=" . $row['id'] . "&action=approve'>Approve</a> | <a href='process_adoption.php?id=" . $row['id'] . "&action=reject'>Reject</a></td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "No adoption applications found.";
}

// Close database connection
mysqli_close($conn);
?>
