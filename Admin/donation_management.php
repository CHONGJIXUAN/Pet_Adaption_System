<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Donations</title>
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
<h1>Donations Management</h1>
<form method="POST" action="view_donation.php">
  <div class="form-group">
    <label for="donor-name">Donor Name:</label>
    <input type="text" class="form-control" id="donor-name" name="donor_name" required>
  </div>
  <button type="submit" class="btn btn-primary">Search</button>
</form>

</body>
</html>