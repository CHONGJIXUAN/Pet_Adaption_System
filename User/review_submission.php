<?php
// Check if the form is submitted
if(isset($_POST['submit_review'])) {
    
    // Get the input values from the form
    $application_id = $_POST['application_id'];
    $name = $_POST['name'];
    $review_text = $_POST['review_text'];
    
    // Validate the input values (e.g. check if they're not empty)
    
    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "", "adoption_application");
    
    // Check the database connection
    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    // Insert the review into the database
    $sql = "INSERT INTO adoption_review (applications_id, name, review_text, review_date) 
            VALUES ('$application_id', '$name', '$review_text', NOW())";
    
    if(mysqli_query($conn, $sql)) {
        // If the review is inserted successfully, show a success message
        echo "<p>Thank you for submitting your review.</p>";
    } else {
        // If there's an error, show an error message
        echo "<p>Error: " . mysqli_error($conn) . "</p>";
    }
    
    // Close the database connection
    mysqli_close($conn);
}
?>
