<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
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
<h1>Adoption Applications Management</h1>
<form method="get" action="process_adoption.php">
    <div class="form-group">
        <label for="pet_name">Pet Name:</label>
        <input type="text" class="form-control" id="pet_name" name="pet_name">
    </div>
    <button type="submit" class="btn btn-primary">Search</button>
</form>

<form method="post" action="process_status.php">
  <div class="form-group">
    <label for="pet-name">Pet Name:</label>
    <input type="text" class="form-control" id="pet-name" name="pet_name" required>
  </div>
  <div class="form-group">
    <label>Status:</label>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="status" id="approve-radio" value="approve" checked>
      <label class="form-check-label" for="approve-radio">
        Approve
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="status" id="reject-radio" value="reject">
      <label class="form-check-label" for="reject-radio">
        Reject
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Update Status</button>
</form>


</body>
</html>