<?php
// Connect to the database
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "search_pet";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get pet details from database based on ID
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM pet_details WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $breed = $row['breed'];
        $age = $row['age'];
        $gender = $row['gender'];
        $image = base64_encode($row['image']); // Convert the long blob to a data URL
        $description = $row['description'];
    } else {
        echo "No pet found with ID: " . $id;
        exit;
    }
} else {
    echo "Invalid request. Please select a pet to view.";
    exit;
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $name; ?> Details - Search Pet</title>
</head>
<body>
    <h1><?php echo $name; ?> Details</h1>
    <img src="data:image/jpeg;base64,<?php echo $image; ?>" alt="Pet Image"> <!-- Display the image as a data URL -->
    <p>Breed: <?php echo $breed; ?></p>
    <p>Age: <?php echo $age; ?></p>
    <p>Gender: <?php echo $gender; ?></p>
    <p>Description: <?php echo $description; ?></p>
    <a href="pet.php">Back to Pets</a>
</body>
</html>
