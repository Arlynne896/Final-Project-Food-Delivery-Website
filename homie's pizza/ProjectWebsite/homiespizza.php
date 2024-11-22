<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Homie's Pizza</title>
	<link href="homiespizza.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" type="x-icon" href="homiesImg/homiespizza.jpg">
</head>

<body>
	<nav>
		<div class="navbar">
			<img src="homiesImg/homiespizza.jpg" alt="logo" class="logo">
			<a class="nav" href="homepage.php">Home</a>
			<a class="nav" href="about.php">About Us</a>
			<div class="dropdown">
				<a href='#' class="dropbtn">Partnership </a>
				<div class="dropdown-content">
					<a href="Shops/burger.php">Bur-go Shop</a>
					<a href="Shops/coffee.php">Coffee Mate</a>
					<a href="Shops/pizza.php">Homie's Pizza</a>
					<a href="Shops/sushi.php">Sushi Kitchen</a>
					<a href="Shops/tea.php">Tastea Shop</a>
				</div>
			</div>
			<a class="nav" href="faq.php">Frequently Asked</a>
			<a class="nav" href="coms/contact.php">Contact Us</a>
		</div>
	</nav>

	<div class="pizza">


		<h1>Pizza got me rollin'</h1>
		<a href="mainpage.php">Order now</a>


	</div>





	<div class="col">

		<h2 class="limited">Limited Offers</h2>

		<div class="card card1">
			<?php echo '<img src="homiesImg/nachos.jpg" alt="league of legends" class="food">' ?>
			<figcaption>Crispy Nachos</figcaption>
			<a href="mainpage.php" class="limitedButton">Order now</a>


		</div>

		<div class="card card2">
			<?php echo '<img src="homiesImg/chicken.jpg" alt="chicken" class="food">' ?>
			<figcaption>Bucket of Crispy Fried Chicken</figcaption>
			<a href="mainpage.php" class="limitedButton">Order now</a>

		</div>

		<div class="card card4">
			<?php echo '<img src="homiesImg/lasagna.jpg" alt="nachos" class="food">' ?>
			<figcaption>Meaty and Saucy Lasagna</figcaption>
			<a href="mainpage.php" class="limitedButton">Order now</a>

		</div>

	</div>


	<div class="dining">
		<h2>Experience the luxury taste foods with your <span class="homies">Homies</span></h2>
		<a href="">Order now</a>


	</div>




</body>

</html>