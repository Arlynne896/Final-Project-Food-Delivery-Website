<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>About Us</title>
		<link href="sample.css" rel="stylesheet"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="icon" type="images/x-icon" href="images/Portion Port Logo.png">
		 <style>
        .header {
            background-image: url("images/group pic.jpg");
            background-size: cover;
            background-position: center;
            height: 100vh;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .header::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #322C2B;
            opacity: .7;
            z-index: -1;
        }
		q {
			font-size:35px;
		}
		main {
			margin-top: 100vh;
		}
    </style>
	</head>
	<body>
	<nav>
		<div class="navbar">
			<a class="nav" href="home.php">Home</a>
			<a class="nav" href="about.php">About Us</a>
			<div class="dropdown">
				<a href='#' class="dropbtn">Partnership </a>
				<div class="dropdown-content">
					<a href="Bur-Go/burger.php">Bur-go House</a>
					<a href="coffee/mate.php">Coffee Mate</a>
					<a href="Homie'sPizza/homiespizza.php">Homie's Pizza</a>
					<a href="kitchen/sh.php">Sushi Kitchen</a>
					<a href="tas/tea.php">Tastea Shop</a>
				</div>
			</div>
			<a class="nav" href="faq.php">Frequently Asked</a>
			<a class="nav" href="coms/contact.php">Contact Us</a>
		</div>
	</nav>
		<div class="header">
			<h1>About Us<br></h1><q>The moment you tap, we’re already there</q>
		</div>
		<main>
			<article>
				<p>With <b>Portion Port</b> at your service, just one tap away and we’ve already teleported right at your doorstep! Too fast for you to react. We’re not just a food delivery service; 
				we're your culinary teleportation hub. Our mission is to make sure that you never have to wait too long for a delicious meal. Whether you’re craving comfort food, exploring exotic cuisines, or just need a 
				quick snack, we’ve got you covered. </p>
			</article>
		
			<section>
				<h2>Our Story</h2>
				<p>Born out of a love for a quick delicious meal and a passion for technology, <strong>Portion Port</strong> was created to bridge the gap between you and the your cravings. 
				Life can be hectic, cooking and going out to eat can be tedious, and we believe that your meal shouldn’t add to the stress. That’s why our platform delivers meals 
				at the speed of light, ensuring your food arrives with teleportation-like precision, preserving its quality and freshness as if it was just served. </p>
			</section>
		
			<section>
				<h2>Our Promise</h2>
				<ul>
					<li><b>Speed</b>: Our delivery system is like a teleportation device for your taste buds. We get your food to you at warp speed, hot and fresh, every single time.</li>
					<li><b>Tech-Savvy Tastes</b>: From local legends to global sensations, our tech-powered platform brings an array of culinary delights straight to your door. The world of flavors is just a click away.</li>
					<li><b>Simplicity</b>: Our platform is your digital chef’s assistant. A few taps, and your meal is virtually teleported to your table—no fuss, no hassle!</li>
				</ul>
			</section>
		
			<section>
				<h2>Why us?</h2>
				<ul>
					<li><b>Instant Gratification</b>: No more waiting in long lines or dealing with traffic. We teleport your meal from the restaurant to your table in no time.</li>
					<li><b>Tech-Savvy Tastes</b>: From local legends to global sensations, our tech-powered platform brings an array of culinary delights straight to your door. The world of flavors is just a click away.</li>
					<li><b>Simplicity</b>: Our platform is your digital chef’s assistant. A few taps, and your meal is virtually teleported to your table—no fuss, no hassle!</li>
				</ul>
			</section>
		
			<span>
				<p>Join us in revolutionizing the way you experience food. Whether you're at home, at work, or on the go, Portion Port is here to satisfy your hunger—instantly.</p>
			</span>
		</main>
		<hr>
		<footer>
			<p><small>Made by Abalain, Almaida, Catimbang, Cuano & Morante 2024 © Copyright Intended</small></p>
		</footer>
	</body>
</html>