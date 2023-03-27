<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Define database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "adoption_application";
    
    // Create a new database connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Get form data
    $pet_name = $_POST["pet_name"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $text = $_POST["text"];
    
    // Prepare SQL statement
    $sql = "INSERT INTO adoption_applications (pet_name, name, email, phone, text, status)
            VALUES ('$pet_name', '$name', '$email', '$phone', '$text', 'pending')";
    
    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "Adoption application submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Close database connection
    $conn->close();
}
?>
