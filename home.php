<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Portion Port</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="icon" type="images/x-icon" href="images/Portion Port Logo.png">
        <style>
            * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            }

            body {
            font-family: Georgia, serif;
            }

            .navbar {
            display: flex;
            float: right;
            background-color:#24393a;
            overflow: visible;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 3;
            padding: 0px;
            height: 70px;
            align-items: center;
            }
            .navbar a {
                color: #FFFFFF;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 20px;
            display: inline-block;
            }

            .navbar a:hover {
                background-color: #97bcc7;
                color: #006884;
            }
            .dropdown{
                float: left;
                overflow: visible;
                position: relative;
                z-index: 4; 
            }
            .dropdown-content {
            display: none;
            position: absolute;
            background-color: #24393a;
            width: 100%;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 5; 
            }
            .dropdown-content a{
                 float: none;
                color: #FFFFFF;
                padding: 12px 16px;
                display: block;
                text-align: left;
            }

            .dropdown:hover .dropbtn {
                background-color: #97bcc7;
                color: #006884;
            }
            .dropdown-content a:hover{
                background-color: #97bcc7;
                color: #006884;
            }
            .dropdown .dropbtn:hover {
                background-color: #97bcc7;
                color: #006884;
            }
            .dropdown:hover .dropdown-content {
                display: block; 
            }

            main, footer {
            padding: 15px;
            width: 100%;
            background-color: #97bcc7;
            position: relative; 
            z-index: 2; 
            }
            main h2 {
            font-size: 40px;
            margin: 0;
            padding-top: 30px;
            letter-spacing: 4px;
            }
            p, li {
            font-size: 20px;
            margin: 1rem;
            line-height: 1.875;
            text-align: justify;
            }

            section {
            margin: 1rem;
            padding:50px 80px; 
            text-align:justify;
            position: relative;
            }

            .header {
                background-image: url("images/food.jpg");
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
            section h2{
                text-align: center;
            }
            div.container {
                text-align: center;
            }
            ul.myUL {
                display: inline-block;
                text-align: left;
                list-style-type: "- ";
            }
            .menu-items {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1.5rem;
            }

            .menu-item {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 1rem;
            text-align: center !important;
            width: 250px;
            }

            .menu-item h4 {
            margin: 0.5rem 0;
            color: #333;
            }

            .menu-item p {
            margin: 0;
            color: #777;
            }

            .modal {
            display: none; 
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8); 
            z-index: 2000;
            }

            .modal-content {
            position: relative;
            margin: 10% auto;
            width: 60%;
            max-width: 800px;
            display: flex;
            background: #97bcc7;
            padding: 20px;
            border-radius: 8px;
            }

            .modal-content img {
            max-width: 50%;
            border-radius: 4px;
            }

            .description {
            padding: 0 20px;
            flex: 1;
            }

            .description h2 {
            margin: 0 0 10px;
            color: #333;
            }

            .description p {
            margin: 0;
            color: #555;
            text-align:justify;
            }

            .close {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 24px;
            color: black;
            cursor: pointer;
            z-index: 9999 !important;
            }

            .close:hover {
            color: red;
            }
            li a{
            text-decoration: none;
            color: black;
            }

            li a:hover{
            color:#006884;
            }
            .header h1 {
            padding-top: 8%;
            font-size: 80px;
            }

            .header > * {
            text-align: center;
            padding-top: 19px;
            color: #97bcc7;
            }

            footer {
            position: relative;
            z-index: 1; 
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
			<h1>Portion Port<br></h1><q style="font-size:25px;">The only port, you'll ever rely on.</q>
		</div>
        <main>
            <article>
                <p>Check out our new and upcoming food items below for each store!</p>
                <div class="container">
                    <ul class="myUL">
                        <li><a href="#burger">Bur-Go House</a></li>
                        <li><a href="#coffee">Coffee Mate</a></li>
                        <li><a href="#pizza">Homie's Pizza</a></li>
                        <li><a href="#sushi">Sushi Kitchen</a></li>
                        <li><a href="#sushi">Tastea Shop</a></li>
                    </ul>
                </div>
                <p>Better prepare your wallet before they run out of servings because it will only be available starting on <b><em>December 9 to December 13</em></b>.</p>
                <p style="text-align:center;"><strong>Don't miss out on your chance and stay tuned for the dates above!</strong></p>
            </article>

            <section id="buger">
				<h2>Bur-Go House</h2>
                <br><br>
				<div class="menu-items">
                    <div class="menu-item">
                        <img id="thumbnail1" src="images/teriyaki burger.png" alt="teriyaki burger" style="cursor: pointer; width: 100%; border-radius: 8px;">
                        <h4>Teriyaki Pina Colada Burger</h4>
                        <p>P255.00</p>
                    </div>
                    <div id="imageModal1" class="modal">
                        <span class="close">&times;</span>
                        <div class="modal-content">
                            <img src="images/teriyaki burger.png" alt="teriyaki burger">
                            <div class="description">
                                <h2>Teriyaki Pina Colada Burger</h2>
                                <p>
                                    <b>Description:</b> 
                                    A tropical-inspired burger that combines the savory richness of a teriyaki-glazed beef patty with the sweet, refreshing flavors of a piña colada. 0 
                                </p><br>
                                <p><strong>P255.00</strong></p>
                            </div>
                        </div>
                    </div>

                    <div class="menu-item">
                        <img id="thumbnail1" src="images/donut burger.jpg" alt="Donut Burger" style="cursor: pointer; width: 100%; border-radius: 8px;">
                        <h4>Donut Burger</h4>
                        <p>P405.00</p>
                    </div>
                    <div id="imageModal1" class="modal">
                        <span class="close">&times;</span>
                        <div class="modal-content">
                            <img src="images/donut burger.jpg" alt="Donut Burger">
                            <div class="description">
                                <h2>Donut Burger</h2>
                                <p>
                                    <b>Description:</b> 
                                    A sweet and savory burger where the bun is a glazed donut. 
                                    The patty is beef, topped with cheese, bacon, and a fried egg. It's a decadent, breakfast-inspired option.
                                </p><br>
                                <p><strong>P405.00</strong></p>
                            </div>
                        </div>
                    </div>

                    <div class="menu-item">
                        <img id="thumbnail1" src="images/mac burger.jpg" alt="Mac & Cheese Burger" style="cursor: pointer; width: 100%; border-radius: 8px;">
                        <h4>Mac & Cheese Burger</h4>
                        <p>P450.00</p>
                    </div>
                    <div id="imageModal1" class="modal">
                        <span class="close">&times;</span>
                        <div class="modal-content">
                            <img src="images/mac burger.jpg" alt="DMac & Cheese Burger">
                            <div class="description">
                                <h2>Mac & Cheese Burger</h2>
                                <p>
                                    <b>Description:</b> 
                                    A beef patty topped with creamy mac and cheese, with a layer of crispy breadcrumbs. 
                                    It’s indulgent, cheesy, and full of comfort.
                                </p><br>
                                <p><strong>P450.00</strong></p>
                            </div>
                        </div>
                    </div>

                </div>
			</section>

            <section id="coffee">
				<h2>Coffee Mate</h2>
                <br><br>
                <div class="menu-items">
                    <div class="menu-item">
                        <img id="thumbnail1" src="images/Irish Coffee.png" alt="Irish Coffee" style="cursor: pointer; width: 100%; border-radius: 8px;">
                        <h4>Irish Coffee</h4>
                        <p>P250.00</p>
                    </div>
                    <div id="imageModal1" class="modal">
                        <span class="close">&times;</span>
                        <div class="modal-content">
                            <img src="images/Irish Coffee.png" alt="Irish Coffee">
                            <div class="description">
                                <h2>Irish Coffee</h2>
                                <p>
                                    <b>Description:</b> 
                                    A warm, comforting cocktail made with freshly brewed coffee, Irish whiskey, sugar, and topped with a layer of whipped cream. 
                                    It combines the richness of coffee with the smoothness of whiskey, creating a perfect balance of flavors.
                                </p>
                                <br>
                                <p><strong>P250.00</strong></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="menu-item">
                        <img id="thumbnail1" src="images/turmeric latte.png" alt="Turmeric Latte" style="cursor: pointer; width: 100%; border-radius: 8px;">
                        <h4>Turmeric Latte (Golden Milk)</h4>
                        <p>P300.00</p>
                    </div>
                    <div id="imageModal1" class="modal">
                        <span class="close">&times;</span>
                        <div class="modal-content">
                            <img src="images/turmeric latte.png" alt="Turmeric Latte">
                            <div class="description">
                                <h2>Turmeric Latte (Golden Milk)</h2>
                                <p>
                                    <b>Description:</b> 
                                    A warm, spiced drink made with turmeric, cinnamon, ginger, and black pepper mixed with steamed milk (or plant-based milk). 
                                    It’s known for its anti-inflammatory properties and earthy flavor.
                                </p><br>
                                <p><strong>P300.00</strong></p>
                            </div>
                        </div>
                    </div>

                    <div class="menu-item">
                        <img id="thumbnail1" src="images/vietnam egg coffee.png" alt="vietnam egg coffee" style="cursor: pointer; width: 100%; border-radius: 8px;">
                        <h4>Vietnamese Egg Coffee (Cà Phê Trứng)</h4>
                        <p>P350.00</p>
                    </div>
                    <div id="imageModal1" class="modal">
                        <span class="close">&times;</span>
                        <div class="modal-content">
                            <img src="images/vietnam egg coffee.png" alt="vietnam egg coffee">
                            <div class="description">
                                <h2>Vietnamese Egg Coffee (Cà Phê Trứng)</h2>
                                <p>
                                    <b>Description:</b> 
                                    A rich and creamy coffee made with egg yolks, sweetened condensed milk, and hot espresso. 
                                    The result is a frothy, custard-like texture with a sweet, velvety flavor.
                                </p><br>
                                <p><strong>P350.00</strong></p>
                            </div>
                        </div>
                    </div>

                    <div class="menu-item">
                        <img id="thumbnail1" src="images/mapple.jpg" alt="Maple Pecan Latte" style="cursor: pointer; width: 100%; border-radius: 8px;">
                        <h4>Maple Pecan Latte</h4>
                        <p>P200.00</p>
                    </div>
                    <div id="imageModal1" class="modal">
                        <span class="close">&times;</span>
                        <div class="modal-content">
                            <img src="images/mapple.jpg" alt="Maple Pecan Latte">
                            <div class="description">
                                <h2>VMaple Pecan Latte</h2>
                                <p>
                                    <b>Description:</b> 
                                    A warm coffee drink made with espresso, steamed milk, and a maple syrup pecan flavor, 
                                    giving it a sweet and nutty profile that's perfect for the Christmas Season.
                                </p><br>
                                <p><strong>P200.00</strong></p>
                            </div>
                        </div>
                    </div>

                </div>
			</section>

            <section id="pizza">
				<h2>Homie's Pizza</h2>
                <br><br>
				<div class="menu-items">
                    <div class="menu-item">
                        <img id="thumbnail1" src="images/Smores Pizza.jpeg" alt="Smores Pizza" style="cursor: pointer; width: 100%; border-radius: 8px;">
                        <h4>S'mores Pizza</h4>
                        <p>P450.00</p>
                    </div>
                    <div id="imageModal1" class="modal">
                        <span class="close">&times;</span>
                        <div class="modal-content">
                            <img src="images/Smores Pizza.jpeg" alt="Smores Pizza">
                            <div class="description">
                                <h2>S'mores Pizza</h2>
                                <p>
                                    <b>Description:</b> 
                                    A sweet dessert pizza that captures the classic campfire treat in a fun and creative way. 
                                    It's a delicious mix of warm, gooey chocolate, toasted marshmallows, and a crunchy graham cracker crust, making it the perfect indulgence for any sweet tooth.
                                </p> <br>
                                <p><strong>P450.00</strong></p>
                            </div>
                        </div>
                    </div>

                    <div class="menu-item">
                        <img id="thumbnail1" src="images/breakfast pizza.jpg" alt="Smores Pizza" style="cursor: pointer; width: 100%; border-radius: 8px;">
                        <h4>Breakfast Pizza</h4>
                        <p>P575.00</p>
                    </div>
                    <div id="imageModal1" class="modal">
                        <span class="close">&times;</span>
                        <div class="modal-content">
                            <img src="images/breakfast pizza.jpg" alt="Smores Pizza">
                            <div class="description">
                                <h2>Breakfast Pizza</h2>
                                <p>
                                    <b>Description:</b> 
                                    A savory pizza that combines classic breakfast favorites with a crispy crust. 
                                    This pizza is topped with scrambled eggs, crispy bacon or sausage, cheese, and sometimes vegetables, 
                                    making it a hearty and satisfying meal for any time of day, especially mornings.
                                </p> <br>
                                <p><strong>P575.00</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
			</section>

            <section id="sushi">
				<h2>Sushi Kitchen</h2>
                <br><br>
				<div class="menu-items">
                    <div class="menu-item">
                        <img id="thumbnail1" src="images/volcano roll.jpg" alt="Volcano Roll" style="cursor: pointer; width: 100%; border-radius: 8px;">
                        <h4>Volcano Roll</h4>
                        <p>P600.00</p>
                    </div>
                    <div id="imageModal1" class="modal">
                        <span class="close">&times;</span>
                        <div class="modal-content">
                            <img src="images/volcano roll.jpg" alt="Volcano Roll">
                            <div class="description">
                                <h2>Volcano Roll</h2>
                                <p>
                                    <b>Description:</b>
                                    A flavorful and indulgent sushi roll made with a base of crab or shrimp, avocado, and cucumber, topped with a spicy mix of baked scallops or crab. 
                                    It’s finished with a drizzle of eel sauce for a savory, smoky finish that makes it a fiery favorite.
                                </p>
                                <br>
                                <p><strong>P600.00</strong></p>
                            </div>
                        </div>
                    </div>

                    <div class="menu-item">
                        <img id="thumbnail1" src="images/dragon roll.jpg" alt="Dragon Roll" style="cursor: pointer; width: 100%; border-radius: 8px;">
                        <h4>Dragon Roll</h4>
                        <p>P600.00</p>
                    </div>
                    <div id="imageModal1" class="modal">
                        <span class="close">&times;</span>
                        <div class="modal-content">
                            <img src="images/dragon roll.jpg" alt="Dragon Roll">
                            <div class="description">
                                <h2>Dragon Roll</h2>
                                <p>
                                    <b>Description:</b>
                                    A visually striking sushi roll featuring eel, avocado, and cucumber wrapped in rice and nori, topped with thin slices of avocado arranged to resemble dragon scales. 
                                    It’s drizzled with sweet eel sauce for a rich, savory finish, making it both flavorful and eye-catching.
                                </p>
                                <br>
                                <p><strong>P600.00</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img id="thumbnail1" src="images/rainbow.jpg" alt="Rainbow Roll" style="cursor: pointer; width: 100%; border-radius: 8px;">
                        <h4>Rainbow Roll</h4>
                        <p>P650.00</p>
                    </div>
                    <div id="imageModal1" class="modal">
                        <span class="close">&times;</span>
                        <div class="modal-content">
                            <img src="images/rainbow.jpg" alt="Rainbow Roll">
                            <div class="description">
                                <h2>Rainbow Roll</h2>
                                <p>
                                    <b>Description:</b>
                                    A vibrant and colorful sushi roll filled with a California roll base of crab (or imitation crab), avocado, and cucumber, 
                                    topped with a variety of fresh sashimi slices, such as tuna, salmon, shrimp, and yellowtail. 
                                    It offers a refreshing mix of flavors and textures, perfect for sushi lovers.
                                </p>
                                <br>
                                <p><strong>P650.00</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
			</section>

            <section id="tea">
				<h2>Tastea Shop</h2>
                <br><br>
				<div class="menu-items">
                    <div class="menu-item">
                        <img id="thumbnail1" src="images/Chai Tea.png" alt="Chai Milk Tea" style="cursor: pointer; width: 100%; border-radius: 8px;">
                        <h4>Chai Milk Tea</h4>
                        <p>P130.00</p>
                    </div>
                    <div id="imageModal1" class="modal">
                        <span class="close">&times;</span>
                        <div class="modal-content">
                            <img src="images/Chai Tea.png" alt="Chai Milk Tea">
                            <div class="description">
                                <h2>Chai Milk Tea</h2>
                                <p><b>Description:</b> 
                                A delightful fusion of robust black tea, fragrant spices, and creamy non-dairy milk. 
                                This comforting beverage offers a perfect harmony of warmth and flavor, making every sip a cozy indulgence.</p>
                                <br>
                                <p><strong>P130.00</strong></p>
                            </div>
                        </div>
                    </div>

                    <div class="menu-item">
                        <img id="thumbnail1" src="images/Four Tea.png" alt="Four Season Spring Milk Tea" style="cursor: pointer; width: 100%; border-radius: 8px;">
                        <h4>Four Season Spring Milk Tea</h4>
                        <p>P120.00</p>
                    </div>
                    <div id="imageModal1" class="modal">
                        <span class="close">&times;</span>
                        <div class="modal-content">
                            <img src="images/Four Tea.png" alt="Four Season Spring Milk Tea">
                            <div class="description">
                                <h2>Four Season Spring Milk Tea</h2>
                                <p><b>Description:</b> 
                                Experience the crisp, floral notes of premium spring tea blended with velvety organic milk for a balanced, refreshing, and creamy indulgence in every sip.</p>
                                <br>
                                <p><strong>P120.00</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
			</section>
        </main>

        <hr>
		
        <footer>
			<p><small>Made by Abalain, Almaida, Catimbang, Cuano & Morante 2024 © Copyright Intended</small></p>
		</footer>

        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const modals = document.querySelectorAll(".modal");
                const thumbnails = document.querySelectorAll("[id^='thumbnail']");
                const closeButtons = document.querySelectorAll(".close");

                thumbnails.forEach((thumbnail, index) => {
                    thumbnail.addEventListener("click", () => {
                        modals[index].style.display = "block";
                    });
                });

                closeButtons.forEach((button, index) => {
                    button.addEventListener("click", () => {
                        modals[index].style.display = "none";
                    });
                });

                window.addEventListener("click", (event) => {
                    modals.forEach((modal) => {
                        if (event.target === modal) {
                            modal.style.display = "none";
                        }
                    });
                });
            });
        </script>

    </body>
</html>