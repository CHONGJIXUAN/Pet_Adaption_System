<?php
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "search_pet");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare and bind parameters
$name = $_POST["name"];
$type = $_POST["type"];
$breed = $_POST["breed"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$description = $_POST["description"];

// Check if image is uploaded
if(isset($_FILES['image'])){
    // Get image file details
    $image_name = $_FILES['image']['name'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_size = $_FILES['image']['size'];
    $image_type = $_FILES['image']['type'];
    $image_error = $_FILES['image']['error'];

    // Check if image is valid
    $allowed_extensions = array("jpg", "jpeg", "png", "gif");
    $image_extension = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
    if (in_array($image_extension, $allowed_extensions)) {
        // Get image contents as a long blob
        $image_data = file_get_contents($image_tmp_name);
    } else {
        echo "Invalid file type. Please upload a valid image file.";
        exit();
    }
} else {
    $image_data = null;
}

$stmt = mysqli_prepare($conn, "INSERT INTO pet_details (name, type, breed, age, gender, image, description) VALUES (?, ?, ?, ?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, "sssssss", $name, $type, $breed, $age, $gender, $image_data, $description);

// Execute statement
if (mysqli_stmt_execute($stmt)) {
    echo "Pet added successfully.";
} else {
    echo "Error adding pet: " . mysqli_error($conn);
}

// Close statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
