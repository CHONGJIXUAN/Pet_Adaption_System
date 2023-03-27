<?php
// Check if the form is submitted
if(isset($_GET['submit'])) {
    
    // Get the input value from the form
    $name = $_GET['name'];
    
    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "", "adoption_application");
    
    // Check the database connection
    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    // Retrieve the application status from the database for the given user's name
    $sql = "SELECT status FROM adoption_applications WHERE name = '$name'";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0) {
        // If there's a result, show the application status
        $row = mysqli_fetch_assoc($result);
        echo "<p>Your application status is: " . $row['status'] . "</p>";
    } else {
        // If there's no result, show a message
        echo "<p>No application found for the given name.</p>";
    }
    
    // Close the database connection
    mysqli_close($conn);
}
?>
