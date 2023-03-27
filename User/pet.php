<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Availalbe Pets</title>
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
<main>
    <section class="section available-pets">
        <h2 class="section-title">Featured Pets</h2>
        <div class="pet-list">

        <div class="pet-item">
        <img src="golden_retriever.jpg" alt="Golden Retriever" class="pet_image">
        <h3 class="pet-name">Buddy</h3>
        <p class="pet-breed">Golden Retriever</p>
        <p class="pet-age">3 years old</p>
        <a href="pet_details.php?id=1" class="btn btn-primary">View Details</a>
        </div>

        <div class="pet-item">
        <img src="siamesen.jpg" alt="Siamesen Cat" class="pet_image">
        <h3 class="pet-name">Cherry</h3>
        <p class="pet-breed">Siamese Cat</p>
        <p class="pet-age">2 years old</p>
        <a href="pet_details.php?id=2" class="btn btn-primary">View Details</a>
        </div>

        <div class="pet-item">
        <img src="Siberian Husky.jpg" alt="Siberian Husky" class="pet_image">
        <h3 class="pet-name">Max</h3>
        <p class="pet-breed">Siberian Husky</p>
        <p class="pet-age">4 years old</p>
        <a href="pet_details.php?id=3" class="btn btn-primary">View Details</a>
        </div>

        <div class="pet-item">
        <img src="bengal cat.jpg" alt="pet4" class="pet_image">
        <h3 class="pet-name">Simba</h3>
        <p class="pet-breed">Bengal Cat</p>
        <p class="pet-age">1 year old</p>
        <a href="pet_details.php?id=4" class="btn btn-primary">View Details</a>
        </div>
        </div>
    </section>

    <section class="section search-filter">
    <h2>Search for a Pet</h2>
    <form method="post" action="search.php">
        <label for="searchName">Name:</label>
        <input type="text" id="searchName" name="searchName"><br>

        <label for="typeFilter">Type:</label>
        <select id="typeFilter" name="typeFilter">
            <option value="">All</option>
            <option value="Dog">Dog</option>
            <option value="Cat">Cat</option>
        </select><br>

        <label for="ageFilter">Age:</label>
        <select id="ageFilter" name="ageFilter">
            <option value="">All</option>
            <option value="1">1 - 3 years old</option>
            <option value="4">4+ years old</option>
        </select><br>
        <input type="submit" value="Search">
    </form>
</section>

</main>
</body>
</html>