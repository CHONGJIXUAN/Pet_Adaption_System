<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Adoption Appliaction</title>
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
<main>
<section>
<form action="submit_application.php" method="POST">
  <label for="pet_name">Pet Name:</label>
  <input type="text" id="pet_name" name="pet_name" required>

  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>

  <label for="phone">Phone Number:</label>
  <input type="tel" id="phone" name="phone" required>

  <label for="text">Tell us about yourself and why you want to adopt:</label>
  <textarea id="text" name="text" required></textarea>

  <input type="submit" value="Submit Application">
</form>
</section>
<h2>Application Review</h2>
<form action="review_submission.php" method="POST">
    <input type="hidden" name="application_id" value="<?php echo $id; ?>">
    <label for="name">Your Name:</label>
    <input type="text" name="name" required>
    <label for="review_text">Review:</label>
    <textarea name="review_text" rows="4" required></textarea>
    <button type="submit" name="submit_review">Submit Review</button>
</form>

<section>
</section>
<section>
<h2>Check your status here</h2>
<form method="get" action="status_check.php">
    <label for="name">Enter your name:</label>
    <input type="text" name="name" id="name">
    <input type="submit" name="submit" value="Check Status">
</form>
</section>

</main>
</body>
</html>