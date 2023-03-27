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

// Get search input from form
$searchName = mysqli_real_escape_string($conn, $_POST['searchName'] ?? "");
$typeFilter = mysqli_real_escape_string($conn, $_POST['typeFilter'] ?? "");
$ageFilter = mysqli_real_escape_string($conn, $_POST['ageFilter'] ?? "");

// Construct SQL query
$sql = "SELECT * FROM pet_details WHERE 1=1";

if (!empty($searchName)) {
    $sql .= " AND name LIKE '%$searchName%'";
}

if (!empty($typeFilter)) {
    $sql .= " AND type = '$typeFilter'";
}

if (!empty($ageFilter)) {
    if ($ageFilter == "1") {
        $sql .= " AND age BETWEEN 1 AND 3";
    } else if ($ageFilter == "4") {
        $sql .= " AND age > 3";
    }
}

$result = mysqli_query($conn, $sql);

// Display search results
if (mysqli_num_rows($result) > 0) {
    echo "<h3>Search Results:</h3>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p>";
        echo "<a href='pet_details.php?id=" . $row['id'] . "'>";
        echo "<img src='data:image/jpeg;base64," . base64_encode($row['image']) . "' alt='" . $row['name'] . "' style='width:150px;height:150px;'>";
        echo "<br>";
        echo $row['name'] . " (" . $row['breed'] . ")";
        echo "</a>";
        echo "</p>";
    }
} else if (!empty($searchName) || !empty($typeFilter) || !empty($ageFilter)) {
    echo "<p>No results found.</p>";
}

// Close the database connection
mysqli_close($conn);
?>