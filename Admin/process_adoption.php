<?php
if(isset($_GET['pet_name'])) {
    // Get search term
    $searchTerm = $_GET['pet_name'];

    // Create database connection
    $conn = mysqli_connect("localhost", "root", "", "adoption_application");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare SQL statement
    $sql = "SELECT * FROM adoption_applications WHERE pet_name LIKE '%$searchTerm%' OR name LIKE '%$searchTerm%'";

    // Execute SQL statement
    $result = mysqli_query($conn, $sql);

    // Check if there are any results
    if (mysqli_num_rows($result) > 0) {
        // Display results in a table
        echo "<table>";
        echo "<tr><th>Pet Name</th><th>Name</th><th>Email</th><th>Phone</th><th>Application Text</th><th>Status</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['pet_name'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['text'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No results found.";
    }

    // Close database connection
    mysqli_close($conn);
}
?>
