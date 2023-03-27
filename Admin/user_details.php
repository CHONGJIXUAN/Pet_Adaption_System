<?php
    // Connect to database
    $conn = mysqli_connect("localhost", "root", "", "login");
    
    // Check if connection successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get username from the form
    $username = $_POST['username'];

    // Prepare query
    $sql = "SELECT * FROM users WHERE username='$username'";

    // Execute query
    $result = mysqli_query($conn, $sql);

    // Check if query successful
    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }

    // Display user details
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Username: " . $row['username'] . "<br>";
            echo "Password: " . $row['password'] . "<br>";
            echo "Email: " . $row['email'] . "<br>";
        }
    } else {
        echo "User not found.";
    }

    // Close database connection
    mysqli_close($conn);
?>
