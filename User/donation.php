<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Donations</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
	<div class="logo">
        <img src="pet.jpg" alt="Pet Logo">
	</div>
		<nav>
			<div class="container">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="pet.php">Explore Pets</a></li>
					<li><a href="adoption_form.php">Application</a></li>
					<li><a href="donation.php">Donations</a></li>
					<li><a href="logout.php">Log Out</a></li>
				</ul>
			</div>
		</nav>
</header>
	<h2>Make a Donation</h2>
	<form method="post" action="donation_processing.php">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name" required>
		<br><br>
		<label for="email">Email:</label>
		<input type="email" name="email" id="email" required>
		<br><br>
		<label for="amount">Amount:</label>
		<input type="number" name="amount" id="amount" min="1" step="0.01" required>
		<br><br>
		<label for="payment_method">Payment Method:</label>
		<select name="payment_method" id="payment_method" required>
			<option value="">Choose a payment method</option>
			<option value="credit_card">Credit Card</option>
			<option value="paypal">PayPal</option>
			<option value="bank_transfer">Bank Transfer</option>
		</select>
		<br><br>
		<input type="submit" name="submit" value="Make Donation">
	</form>
	<br>
</body>
</html>
