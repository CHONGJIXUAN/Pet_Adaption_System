<!DOCTYPE html>
<html>
<head>
	<title>Pet Management</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
	<div class="logo">
        <img src="pet.jpg" alt="Pet Logo">
	</div>
		<nav>
			<div class="container">
				<ul>
                    <li><a href="index.php">Quantity Record</a></li>
					<li><a href="user_management.php">User Mangement</a></li>
					<li><a href="pet_management.php">Pet Mangement</a></li>
					<li><a href="application_management.php">Adoption Mangement</a></li>
					<li><a href="donation_management.php">Donations Mangement</a></li>
					<li><a href="logout.php">Log Out</a></li>
				</ul>
			</div>
		</nav>
</header>
	<h1>Pet Management</h1>
	
	<!-- Add Pet Form -->
    <h2>Add a New Pet</h2>
	<form method="post" action="add_pet.php" enctype="multipart/form-data">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>
    
    <label for="type">Type:</label>
    <input type="text" id="type" name="type"><br><br>
    
    <label for="breed">Breed:</label>
    <input type="text" id="breed" name="breed"><br><br>
    
    <label for="age">Age:</label>
    <input type="text" id="age" name="age"><br><br>
    
    <label for="gender">Gender:</label>
    <input type="text" id="gender" name="gender"><br><br>
    
    <label for="image">Image:</label>
    <input type="file" id="image" name="image"><br><br>
    
    <label for="description">Description:</label>
    <textarea id="description" name="description"></textarea><br><br>
    
    <input type="submit" value="Add Pet">
</form>

<h2>Edit a Pet</h2>
<form method="post" action="edit_pet.php" enctype="multipart/form-data">
    <label for="old_pet_name">Old Pet Name:</label>
    <input type="text" id="old_pet_name" name="old_pet_name" required>
    <br>
    <label for="pet_name">New Pet Name:</label>
    <input type="text" id="pet_name" name="pet_name" required>
    <br>
    <label for="pet_type">Pet Type:</label>
    <input type="text" id="pet_type" name="pet_type" required>
    <br>
    <label for="pet_breed">Pet Breed:</label>
    <input type="text" id="pet_breed" name="pet_breed" required>
    <br>
    <label for="pet_age">Pet Age:</label>
    <input type="number" id="pet_age" name="pet_age" min="0" required>
    <br>
    <label for="pet_gender">Pet Gender:</label>
    <select id="pet_gender" name="pet_gender" required>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
    <br>
    <label for="pet_image">Pet Image:</label>
    <input type="file" id="pet_image" name="pet_image" accept="image/*" required>
    <br>
    <label for="pet_description">Pet Description:</label>
    <textarea id="pet_description" name="pet_description" rows="4" cols="50" required></textarea>
    <br>
    <input type="submit" name="submit" value="Update Pet Data">
</form>



<h2>Remove Pet</h2>

<form method="post" action="remove_pet.php">
    <div class="form-group">
    <p>Enter the name of the pet you want to remove:</p>
        <label for="pet_name">Pet Name:</label>
        <input type="text" class="form-control" id="pet_name" name="pet_name">
    </div>
    <input type="submit" value="Remove Pet">
</form>

<h1>View Pet Details</h1>
    <form method="get" action="pet_details.php">
        <div class="form-group">
            <label for="name">Pet Name:</label>
            <input type="text" class="form-control" id="pet_name" name="pet_name">
            </div>
            <input type="submit" value="View Pet Details">
    </form>
</body>
</html>
