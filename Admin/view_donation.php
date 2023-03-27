<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "donation";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the search term from the POST request
$donor_name = $_POST['donor_name'];

// Prepare a SELECT statement with a placeholder for the search term
$stmt = mysqli_prepare($conn, "SELECT * FROM donations WHERE name = ?");
mysqli_stmt_bind_param($stmt, "s", $donor_name);
mysqli_stmt_execute($stmt);

// Get the results of the query
$result = mysqli_stmt_get_result($stmt);

// Loop through the results and display them in a table
echo "<table>";
echo "<tr><th>Name</th><th>Email</th><th>Amount</th><th>Payment Method</th><th>Donation Date</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr><td>" . $row['name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['amount'] . "</td><td>" . $row['payment_method'] . "</td><td>" . $row['donation_date'] . "</td></tr>";
}
echo "</table>";

// Clean up the prepared statement and close the database connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
