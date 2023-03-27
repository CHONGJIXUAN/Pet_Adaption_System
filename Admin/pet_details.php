<?php
// Replace database_name, username, and password with your database credentials
$servername = "localhost";
$database_name = "search_pet";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['pet_name'])) {
    $pet_name = $_GET['pet_name'];
    
    // Prepare SQL query to fetch pet details by name
    $sql = "SELECT * FROM pet_details WHERE name = '$pet_name'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<h2>" . $row["name"] . "</h2>";
            echo "<p>Type: " . $row["type"] . "</p>";
            echo "<p>Breed: " . $row["breed"] . "</p>";
            echo "<p>Age: " . $row["age"] . "</p>";
            echo "<p>Gender: " . $row["gender"] . "</p>";
            echo "<p>Description: " . $row["description"] . "</p>";
            // Display image
            echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" style="max-width: 300px;">';
        }
    } else {
        echo "No results found.";
    }

    mysqli_close($conn);
}
?>
