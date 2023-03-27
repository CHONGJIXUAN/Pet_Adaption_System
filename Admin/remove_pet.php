<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "search_pet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $pet_name = $_POST["pet_name"];
    
    $sql = "DELETE FROM pet_details WHERE name = ?";
    $stmt = $conn->prepare($sql);
    
    $stmt->bind_param("s", $pet_name);
    
    if($stmt->execute()){
        echo "Pet removed successfully.";
    } else {
        echo "Error removing pet: " . $conn->error;
    }
    
    $stmt->close();
}

$conn->close();
?>
