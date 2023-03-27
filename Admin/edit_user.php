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
    $old_username = $_POST["old_username"];
    $new_username = $_POST["new_username"];
    $new_email = $_POST["new_email"];
    $new_password = $_POST["new_password"];

    // Check if old username exists in database
    $sql = "SELECT * FROM users WHERE username = '$old_username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Username exists, update user information
        $sql = "UPDATE users SET username = '$new_username', email = '$new_email', password = '$new_password' WHERE username = '$old_username'";
        if (mysqli_query($conn, $sql)) {
            // Update successful
            echo "User information updated successfully!";
        } else {
            echo "Error updating user information: " . mysqli_error($conn);
        }
    } else {
        // Username does not exist
        echo "Username does not exist. Please enter a valid username.";
    }

    mysqli_close($conn);
}

?>
