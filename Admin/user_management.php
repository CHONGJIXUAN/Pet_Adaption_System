<!DOCTYPE html>
<html>
<head>
	<title>User Management</title>
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
	<h1>User Management</h1>
	
	<!-- Add User Form -->
	<h2>Add User</h2>
	<form method="post" action="add_user.php">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username"><br><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email"><br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password"><br><br>
		<input type="submit" value="Add User">
	</form>
	
	<!-- Edit User Form -->
    <h2>Edit User Information</h2>
    <form method="post" action="edit_user.php">
        <label for="old_username">Old Username:</label>
        <input type="text" id="old_username" name="old_username"><br><br>
        <label for="new_username">New Username:</label>
        <input type="text" id="new_username" name="new_username"><br><br>
        <label for="new_email">New Email:</label>
        <input type="email" id="new_email" name="new_email"><br><br>
        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password"><br><br>
        <input type="submit" value="Save Changes">
    </form>
	
	<!-- Remove User Form -->
	<h2>Remove User</h2>
	<form method="post" action="remove_user.php">
		<label for="user_name">User Name:</label>
		<input type="text" id="user_name" name="user_name"><br><br>
		<input type="submit" value="Remove User">
	</form>
	
	<!-- View User Details Form -->
    <h2>User Details</h2>
	<form method="post" action="user_details.php">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username"><br><br>
		<input type="submit" value="Get User Details">
	</form>

</body>
</html>
