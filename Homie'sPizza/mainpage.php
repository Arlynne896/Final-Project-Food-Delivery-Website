<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Homie's Pizza</title>
	<link href="mainpage.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" type="x-icon" href="homiesImg/homiespizza.jpg">
</head>

<body>
	<nav>
		<div class="navbar">
			<img src="homiesImg/homiespizza.jpg" alt="logo" class="logo">
			<a class="nav" href="homiespizza.php">Home</a>
			<a class="nav" href="../about.php">About Us</a>
			<a class="nav" href="../faq.php">Frequently Asked</a>
			<a class="nav" href="../coms/contact.php">Contact Us</a>
		</div>
	</nav>

	<div class="pizza">

		<img src="homiesImg/cheese.webp" alt="cheese pizza" class="cheese">

		<div class="text">
			<h2>Triple Cheese Pizza</h2>
			<p>Cheese cravings? Your homies got you!! Satisfy your cheese cravings from our very own top seller Homie's Triple Cheese Pizza </p>

		</div>


	</div>

	<div class="container">

		<header>
			<div class="title">Our Menu</div>
			<div class="icon-cart">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
					<path fill="#ffffff" d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
				</svg>
				<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1" />
				</svg>
				<span>0</span>
			</div>
		</header>
		<div class="listProduct">

		</div>
	</div>
	<div class="cartTab">
		<h1>Shopping Cart</h1>
		<div class="listCart">

		</div>
		<div class="btn">
			<button class="close">CLOSE</button>
			<button class="checkOut" onclick="login()">Check Out</button>
		</div>
	</div>

	<script src="addtocart.js"></script>


	<div class="dining">
		<h2>Experience the luxury taste foods with your <span class="homies">Homies</span></h2>
		<a href="">Order now</a>


	</div>




</body>

</html>