<?php
if (isset($_POST['submit'])) {
    // Retrieve form data
    $old_name = $_POST['old_pet_name'];
    $name = $_POST['pet_name'];
    $type = $_POST['pet_type'];
    $breed = $_POST['pet_breed'];
    $age = $_POST['pet_age'];
    $gender = $_POST['pet_gender'];
    $description = $_POST['pet_description'];
    $image = null;

    // Check if file was uploaded
    if (isset($_FILES['pet_image']) && $_FILES['pet_image']['error'] === UPLOAD_ERR_OK) {
        // Read image file into a string
        $image = file_get_contents($_FILES['pet_image']['tmp_name']);
    }

    $conn = mysqli_connect("localhost", "root", "", "search_pet");
$query = "UPDATE pet_details SET name=?, type=?, breed=?, age=?, gender=?, image=?, description=? WHERE name=?";
$stmt = mysqli_prepare($conn, $query);

if (!$stmt) {
    die("Error: " . mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssssssss", $name, $type, $breed, $age, $gender, $image, $description, $old_name);
mysqli_stmt_execute($stmt);

if (mysqli_affected_rows($conn) > 0) {
    echo "Pet data updated successfully!";
} else {
    echo "Error updating pet data. Please try again.";
}

mysqli_stmt_close($stmt);
mysqli_close($conn);

}
?>
