<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pet Adaption System</title>
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
	<div>
    	<h2>Welcome to Our Pet Adoption System</h2>
	</div>
	<div class="container">
	<section class="featured-pets">
  		<div class="featured-pet">
    	<img src="golden_retriever.jpg" alt="Golden Retrever">
    	<h3>Friendly, Loyal, Intelligent</h3>
    	<p>Buddy is a friendly and outgoing golden retriever who loves to be around people.</p>
 	 </div>
  	<div class="featured-pet">
    	<img src="persian_cat.jpg" alt="Persian Cat">
    	<h3>Fluffy, Calm, Affectionate</h3>
    	<p>Luna is a beautiful and elegant Persian cat with a luxurious fluffy coat.</p>
  	</div>
  	<div class="featured-pet">
    	<img src="Siberian Husky.jpg" alt="Siberian Husky">
    	<h3>Energetic, Independent, Intelligent</h3>
    	<p>Siberian Huskies are highly energetic dogs that love to run and play.</p>
  	</div>
	</section>
	
  	<section class="about-us">
    	<h2>About Us</h2>
    	<p>We are a non-profit organization dedicated to finding homes for pets in need. Our mission is to promote responsible pet ownership and reduce the number of homeless pets through adoption, education, and spay/neuter programs.</p>
    	<p>Our team of dedicated volunteers work tirelessly to provide care, love, and shelter to animals who have been abandoned, abused, or surrendered by their owners. We believe that every pet deserves a loving home, and we strive to make that a reality for as many animals as possible.</p>
    	<p>If you're interested in adopting a pet or getting involved with our organization, please contact us. We'd love to hear from you!</p>
  	</section>

	<section class="section contact-us">
  		<h2 class="section-title">Contact Us</h2>
  		<form action="process_contact.php" method="POST">
    	<label for="name">Name</label>
    	<input type="text" id="name" name="name" required>
    	<label for="email">Email</label>
    	<input type="email" id="email" name="email" required>
    	<label for="message">Message</label>
    	<textarea id="message" name="message" required></textarea>
    	<button type="submit">Submit</button>
  		</form>
	</section>

	</div>
</main>
</body>
</html>