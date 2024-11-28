<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Tastea Shop</title>
		<link href="tt.css" rel="stylesheet"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="icon" type="../images/x-icon" href="../images/Tastea Logo.png">
	</head>
	<body>
		<nav>
			<div class="navbar">
				<a class="nav" href="../home.php">Home</a>
				<a class="nav" href="../about.php">About Us</a>
				<div class="dropdown">
					<a href='#' class="dropbtn">Partnership </a>
					<div class="dropdown-content">
						<a href="../Bur-Go Pizza/burger.php">Bur-go House</a>
						<a href="../coffee/mate.php">Coffee Mate</a>
						<a href="../Homie'sPizza/homiespizza.php">Homie's Pizza</a>
						<a href="../kitchen/sh.php">Sushi Kitchen</a>
						<a href="tea.php">Tastea Shop</a>
					</div>
				</div>
				<a class="nav" href="../faq.php">Frequently Asked</a>
				<a class="nav" href="../coms/contact.php">Contact Us</a>
				<a id="cart" class="fa fa-shopping-cart" onclick="openPopup()"></a>
			</div>
		</nav>
		<div class="bgimg-1">
			<div class="overlay"></div>
			<div class="caption">
				<span class="border">Lookin' for something <b>tastea</b>?</span>
			</div>
		</div>
		<div class="container">
			<h3>Our Menu</h3>
			<div class="menu-items">

			<div class="menu-item">
					<img id="thumbnail1" src="images/Milk Tea.png" alt="Presso Milk Tea" style="cursor: pointer; width: 100%; border-radius: 8px;">
					<h4>Presso Milk Tea</h4>
					<p>P75.00</p>
				</div>
				<div id="imageModal1" class="modal">
					<span class="close">&times;</span>
					<div class="modal-content">
						<img src="images/Milk Tea.png" alt="Presso Milk Tea">
						<div class="description">
							<h2>Presso Milk Tea</h2>
							<p><b>Description:</b> Its a modern twist on the classic milk tea, made with freshly brewed tea through a pressurized process that enhances its natural flavors and aroma. 
								Its simplicity highlights the quality of its ingredients, making it a wholesome and refreshing drink for tea enthusiasts who appreciate a well-balanced and minimally processed milk tea experience.</p>
							<br>
							<p><b>Ingredients:</b> Contains Pressed Tea Leaves, and Organic Fresh Milk.</p>
							<br>
							<p><strong>P75.00</strong></p>
						</div>
					</div>
				</div>

				<div class="menu-item">
					<img id="thumbnail2" src="images/Thai Tea.png" alt="Thai Tea" style="cursor: pointer; width: 100%; border-radius: 8px;">
					<h4>Thai Tea</h4>
					<p>P80.00</p>
				</div>
				<div id="imageModal2" class="modal">
					<span class="close">&times;</span>
					<div class="modal-content">
						<img src="images/Thai Tea.png" alt="Thai Tea">
						<div class="description">
							<h2>Thai Tea</h2>
							<p><b>Description:</b> It is a vibrant, sweet, and creamy beverage that is a staple in Thai cuisine. 
								The richness of fresh milk blends seamlessly with the bold flavors of the tea, creating a luscious and aromatic drink. 
								It is both refreshing and indulgent, making it a perfect companion to spicy dishes or a treat on its own.</p><br>
							<p><b>Ingredients:</b> Contains Thai Tea and Dairy.</p><br>
							<p><strong>P80.00</strong></p>
						</div>
					</div>
				</div>

			<div class="menu-item">
					<img id="thumbnail3" src="images/Okinawa Milk Tea.png" alt="Okinawa Milk Tea" style="cursor: pointer; width: 100%; border-radius: 8px;">
					<h4>Okinawa Milk Tea</h4>
					<p>P90.00</p>
				</div>
				<div id="imageModal3" class="modal">
					<span class="close">&times;</span>
					<div class="modal-content">
						<img src="images/Okinawa Milk Tea.png" alt="Okinawa Milk Tea">
						<div class="description">
							<h2>Okinawa Milk Tea</h2>
							<p><b>Description:</b> This tea offers a perfect balance of creamy milk, robust black tea, and the deep, molasses-like sweetness of the kokuto sugar. Loved for its smooth and velvety texture, 
								It is a comforting and indulgent drink that provides a unique twist on classic milk tea flavors.</p><br>
							<p><b>Ingredients:</b> Contains Kokuto Sugar (Roasted Brown Sugar), non-dairy milk and black tea.</p><br>
							<p><strong>P90.00</strong></p>
						</div>
					</div>
				</div>

				<div class="menu-item">
					<img id="thumbnail4" src="images/Mango Tea.png" alt="Mango Tea" style="cursor: pointer; width: 100%; border-radius: 8px;">
					<h4>Mango Passion Tea</h4>
					<p>P120.00</p>
				</div>
				<div id="imageModal4" class="modal">
					<span class="close">&times;</span>
					<div class="modal-content">
						<img src="images/Mango Tea.png" alt="Mango Tea">
						<div class="description">
							<h2>Mango Passion Tea</h2>
							<p><b>Description:</b> It offers a harmonious balance of fruity, floral, and refreshing flavors with sweet notes and malty undertones.
								A delightful treat that evokes the warmth of summer and the serenity of nature in every sip.</p><br>
							<p><b>Ingredients:</b> Contains mango, passion fruit, jasmine, and green tea.</p><br>
							<p><strong>P120.00</strong></p>
						</div>
					</div>
				</div>

				<div class="menu-item">
					<img id="thumbnail5" src="images/Taro Tea.png" alt="Taro Tea" style="cursor: pointer; width: 100%; border-radius: 8px;">
					<h4>Taro Milk Tea</h4>
					<p>P90.00</p>
				</div>
				<div id="imageModal5" class="modal">
					<span class="close">&times;</span>
					<div class="modal-content">
						<img src="images/Taro Tea.png" alt="Taro Tea">
						<div class="description">
							<h2>Taro Milk Tea</h2>
							<p><b>Description:</b> A pastel purple delight with creamy and vibrant beverage loved for its subtle sweetness and earthy flavor
								which has a naturally nutty and slightly vanilla-like taste.
								It is a smooth, velvety texture, making it a perfect choice for those seeking a refreshing yet indulgent drink.</p><br>
							<p><b>Ingredients:</b> Taro, non-dairy milk, and jasmine green tea.</p><br>
							<p><strong>P90.00</strong></p>
						</div>
					</div>
				</div>

				<div class="menu-item">
					<img id="thumbnail6" src="images/Grape Tea.png" alt="Grape Tea" style="cursor: pointer; width: 100%; border-radius: 8px;">
					<h4>Duo Grape Tea</h4>
					<p>P149.00</p>
				</div>
				<div id="imageModal6" class="modal">
					<span class="close">&times;</span>
					<div class="modal-content">
						<img src="images/Grape Tea.png" alt="Grape Tea">
						<div class="description">
							<h2>Duo Grape Tea</h2>
							<p><b>Description:</b> It is a delightful fusion of sweet and tangy flavors with a light floral undertone that perfectly balances the fruity notes.
							It delivers a velvety, indulgent texture with every sip. A refreshing treat that combines fruitiness and creaminess in one irresistible drink.</p><br>
							<p><b>Ingredients:</b> kyoho grape, green grape, jasmine green tea, snow cream, blended ice.</p><br>
							<p><strong>P149.00</strong></p>
						</div>
					</div>
				</div>

				<div class="menu-item">
					<img id="thumbnail6" src="images/Rose Tea.png" alt="Rose Tea" style="cursor: pointer; width: 100%; border-radius: 8px;">
					<h4>Rose Spring Tea</h4>
					<p>P80.00</p>
				</div>
				<div id="imageModal6" class="modal">
					<span class="close">&times;</span>
					<div class="modal-content">
						<img src="images/Rose Tea.png" alt="Rose Tea">
						<div class="description">
							<h2>Rose Spring Tea</h2>
							<p><b>Description:</b> It is a delicate and aromatic beverage that captures the essence of blooming spring. This drink exudes elegance and serenity. 
							The gentle fragrance of roses pairs harmoniously with the tea's natural flavors, creating a soothing and uplifting experience. 
							Perfect for those who appreciate the beauty and taste of floral-inspired drinks.</p><br>
							<p><b>Ingredients:</b> rose petals and jasmine green tea.</p><br>
							<p><strong>P100.00</strong></p>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="bgimg-2">
			<div class="overlay"></div>
			<div class="caption">
				<span class="border-text">Smootea</span>
			</div>
		</div>
		<div style="position:relative;">
			<div class="horizontal-box" style="background-color:#ffc360;">
				<div class="menu-items">

					<div class="menu-item">
						<img id="thumbnail7" src="images/Pineapple Smootea.png" alt="Pineapple Smootea" style="cursor: pointer; width: 100%; border-radius: 8px;">
						<h4>Pineapple Smootea</h4>
						<p>P120.00</p>
					</div>
					<div id="imageModal7" class="modal">
						<span class="close">&times;</span>
						<div class="modal-content">
							<img src="images/Pineapple Smootea.png" alt="Pineapple Smootea">
							<div class="description">
								<h2>Pineapple Smootea</h2>
								<p><b>Description:</b> The bright, tangy notes of pineapple pair beautifully with the smoothness of dairy, while the subtle essence of spring tea adds a delicate, calming touch.</p><br>
								<p><b>Ingredients:</b> pineapple, dairy, spring tea and blended ice.</p><br>
								<p><strong>P120.00</strong></p>
							</div>
						</div>
					</div>

					<div class="menu-item">
						<img id="thumbnail8" src="images/Strawberry Smootea.png" alt="Strawberry Smootea" style="cursor: pointer; width: 100%; border-radius: 8px;">
						<h4>Strawberry Smootea</h4>
						<p>P120.00</p>
					</div>
					<div id="imageModal8" class="modal">
						<span class="close">&times;</span>
						<div class="modal-content">
							<img src="images/Strawberry Smootea.png" alt="Strawberry Smootea">
							<div class="description">
								<h2>Strawberry Smootea</h2>
								<p><b>Description:</b> This expertly blended drink delivers a smooth, refreshing burst of fruity sweetness balanced with subtle tea undertones. 
								Perfectly crafted for a light and satisfying indulgence.</p><br>
								<p><b>Ingredients:</b> strawberry, dairy, spring tea and blended ice.</p><br>
								<p><strong>P120.00</strong></p>
							</div>
						</div>
					</div>

					<div class="menu-item">
						<img id="thumbnail9" src="images/Lychee Smootea.png" alt="Lychee Smootea" style="cursor: pointer; width: 100%; border-radius: 8px;">
						<h4>Lychee Smootea</h4>
						<p>P120.00</p>
					</div>
					<div id="imageModal9" class="modal">
						<span class="close">&times;</span>
						<div class="modal-content">
							<img src="images/Lychee Smootea.png" alt="Lychee Smootea">
							<div class="description">
								<h2>Lychee Smootea</h2>
								<p><b>Description:</b> Delight in the exotic sweetness of lychee blended with creamy dairy and the gentle notes of spring tea. 
								This refreshing creation offers a smooth, velvety texture that perfectly harmonizes the tropical fruit's floral aroma with the subtle tea undertones. 
								A luxurious and invigorating treat for milk tea lovers seeking a unique twist!</p><br>
								<p><b>Ingredients:</b> lychee, dairy, spring tea and blended ice.</p><br>
								<p><strong>P120.00</strong></p>
							</div>
						</div>
					</div>
					
				</div>	
			</div>
		</div>
		<div class="bgimg-3">
			<div class="overlay"></div>
			<div class="caption">
				<span class="border-text">Desserts</span>
			</div>
		</div>
		<div style="position:relative;">
			<div class="horizontal-box" style="background-color:#a8f080;">
				<div class="menu-items">

					<div class="menu-item">
						<img id="thumbnail10" src="images/dessert 1.jpg" alt="Chocolate-Pistachio" style="cursor: pointer; width: 100%; border-radius: 8px;">
						<h4>Chocolate-Pistachio Tartufo</h4>
						<p>P200.00</p>
					</div>
					<div id="imageModal10" class="modal">
						<span class="close">&times;</span>
						<div class="modal-content">
							<img src="images/dessert 1.jpg" alt="Chocolate-Pistachio">
							<div class="description">
								<h2>Chocolate-Pistachio Tartufo</h2>
								<p><b>Description:</b> Nothing could be sweeter than sharing this chocolate-covered ice cream treat. 
								It's our take on the Italian frozen dessert tartufo, made with chocolate and pistachio ice creams.</p><br>
								<p><strong>P200.00</strong></p>
							</div>
						</div>
					</div>

					<div class="menu-item">
						<img id="thumbnail11" src="images/dessert 2.png" alt="Mousse Parfait" style="cursor: pointer; width: 100%; border-radius: 8px;">
						<h4>Chocolate-Mousse Parfaits</h4>
						<p>P150.00</p>
					</div>
					<div id="imageModal11" class="modal">
						<span class="close">&times;</span>
						<div class="modal-content">
							<img src="images/dessert 2.png" alt="Mousse Parfait">
							<div class="description">
								<h2>Chocolate-Mousse Parfaits</h2>
								<p><b>Description:</b> Enjoy the creamy mousse layered with spice cookie crumbs and topped with whipped cream.</p><br>
								<p><strong>P150.00</strong></p>
							</div>
						</div>
					</div>

					<div class="menu-item">
						<img id="thumbnail12" src="images/dessert 3.jpg" alt="Strawberry Napoleon" style="cursor: pointer; width: 100%; border-radius: 8px;">
						<h4>Strawberry Napoleon</h4>
						<p>P250.00</p>
					</div>
					<div id="imageModal12" class="modal">
						<span class="close">&times;</span>
						<div class="modal-content">
							<img src="images/dessert 3.jpg" alt="Strawberry Napoleon">
							<div class="description">
								<h2>Strawberry Napoleon</h2>
								<p><b>Description:</b> Get ready to love these tangy, fragrant vanilla-and-strawberry ice cream sandwiches. 
								With layers of puff pastry in between, it’ll be a sweet treat you look forward to after a hot, summer day.</p><br>
								<p><strong>P250.00</strong></p>
							</div>
						</div>
					</div>

					<div class="menu-item">
						<img id="thumbnail13" src="images/dessert 4.png" alt="Coffee Crème Caramel" style="cursor: pointer; width: 100%; border-radius: 8px;">
						<h4>Coffee Crème Caramel</h4>
						<p>P140.00</p>
					</div>
					<div id="imageModal13" class="modal">
						<span class="close">&times;</span>
						<div class="modal-content">
							<img src="images/dessert 4.png" alt="Coffee Crème Caramel">
							<div class="description">
								<h2>Coffee Crème Caramel</h2>
								<p><b>Description:</b> Coffee Crème Caramel is a silky, coffee-infused custard topped with a rich caramel glaze, 
								offering a perfect blend of bold and sweet flavors.</p><br>
								<p><strong>P140.00</strong></p>
							</div>
						</div>
					</div>

					<div class="menu-item">
						<img id="thumbnail14" src="images/dessert 5.png" alt="Upside-Down Cake" style="cursor: pointer; width: 100%; border-radius: 8px;">
						<h4>Black Forest Upside-Down Cake</h4>
						<p>P1,000.00</p>
					</div>
					<div id="imageModal14" class="modal">
						<span class="close">&times;</span>
						<div class="modal-content">
							<img src="images/dessert 5.png" alt="Upside-Down Cake">
							<div class="description">
								<h2>Black Forest Upside-Down Cake</h2>
								<p><b>Description:</b> Less cream, more cake, and more cherries make these mini cakes a winner. 
								The rum-spiked whipped cream is not to be missed.</p><br>
								<p><strong>P1,000.00</strong></p>
							</div>
						</div>
					</div>
					<div class="menu-item">
						<img id="thumbnail15" src="images/dessert 6.png" alt="Mango Sorbet" style="cursor: pointer; width: 100%; border-radius: 8px;">
						<h4>Mango Sorbet</h4>
						<p>P100.00</p>
					</div>
					<div id="imageModal15" class="modal">
						<span class="close">&times;</span>
						<div class="modal-content">
							<img src="images/dessert 6.png" alt="Mango Sorbet">
							<div class="description">
								<h2>Mango Sorbet</h2>
								<p><b>Description:</b> Its a refreshing frozen treat bursting with the sweet and tangy flavor of ripe mangoes, perfect for a tropical indulgence.</p><br>
								<p><strong>P100.00</strong></p>
							</div>
						</div>
					</div>

					<div class="menu-item">
						<img id="thumbnail16" src="images/dessert 7.jpg" alt="Pots de Crème" style="cursor: pointer; width: 100%; border-radius: 8px;">
						<h4>Chocolate Pots de Crème</h4>
						<p>P150.00</p>
					</div>
					<div id="imageModal16" class="modal">
						<span class="close">&times;</span>
						<div class="modal-content">
							<img src="images/dessert 7.jpg" alt="Pots de Crème">
							<div class="description">
								<h2>Chocolate Pots de Crème</h2>
								<p><b>Description:</b> It is a rich and velvety dessert, offering deep chocolate flavor in a silky, custard-like treat that's pure indulgence.</p><br>
								<p><strong>P150.00</strong></p>
							</div>
						</div>
					</div>

					<div class="menu-item">
						<img id="thumbnail17" src="images/dessert 8.png" alt="Meyer-Lemon and Coconut Layer Cake" style="cursor: pointer; width: 100%; border-radius: 8px;">
						<h4>Meyer-Lemon and Coconut Layer Cake</h4>
						<p>P1,800.00</p>
					</div>
					<div id="imageModal17" class="modal">
						<span class="close">&times;</span>
						<div class="modal-content">
							<img src="images/dessert 8.png" alt="Meyer-Lemon and Coconut Layer Cake">
							<div class="description">
								<h2>Meyer-Lemon and Coconut Layer Cake</h2>
								<p><b>Description:</b> 
								Meyer-Lemon and Coconut Layer Cake is a bright and tropical dessert, featuring layers of tangy Meyer lemon curd and fluffy coconut cake, 
								finished with creamy frosting and a hint of zest</p><br>
								<p><strong>P1,800.00</strong></p>
							</div>
						</div>
					</div>

				</div>	
			</div>
		</div>
		<div class="bgimg-1">
			<div class="overlay"></div>
			<div class="caption">
				<button class="order-now-btn" onclick="openPopup()">Order Now</button>
				<div id="orderPopup" class="popup">
					<div class="popup-content">
						<span class="close-btn" onclick="closePopup()">&times;</span>
						<h2>Place Your Order</h2>
						
						<form class="order-form">
							<ul class="popup-menu-list">
								<li class="order-item">
									<label for="Presso-Milk-Tea">Presso Milk Tea (P75.00):</label>
									<input type="number" id="Presso-Milk-Tea" name="Presso-Milk-Tea" min="0" value="0">
									<button type="button" onclick="addToCart('Presso-Milk-Tea')">Add to Cart</button>
								</li>
								<li class="order-item">
									<label for="Thai-Tea">Thai Tea (P80.00):</label>
									<input type="number" id="Thai-Tea" name="Thai-Tea" min="0" value="0">
									<button type="button" onclick="addToCart('Thai-Tea')">Add to Cart</button>
								</li>
								<li class="order-item">
									<label for="Okinawa-Milk-Tea">Okinawa Milk Tea (P90.00):</label>
									<input type="number" id="Okinawa-Milk-Tea" name="Okinawa-Milk-Tea" min="0" value="0">
									<button type="button" onclick="addToCart('Okinawa-Milk-Tea')">Add to Cart</button>
								</li>
								<li class="order-item">
									<label for="Mango-Tea">Mango Passion Tea (P120.00):</label>
									<input type="number" id="Mango-Tea" name="Mango-Tea" min="0" value="0">
									<button type="button" onclick="addToCart('Mango-Tea')">Add to Cart</button>
								</li>
								<li class="order-item">
									<label for="Taro-Tea">Taro Milk Tea (P90.00):</label>
									<input type="number" id="Taro-Tea" name="Taro-Tea" min="0" value="0">
									<button type="button" onclick="addToCart('Taro-Tea')">Add to Cart</button>
								</li>
								<li class="order-item">
									<label for="Duo-Grape-Tea">Duo Grape Tea (P149.00):</label>
									<input type="number" id="Duo-Grape-Tea" name="Duo-Grape-Tea" min="0" value="0">
									<button type="button" onclick="addToCart('Duo-Grape-Tea')">Add to Cart</button>
								</li>
								<li class="order-item">
									<label for="Rose-Tea">Rose Spring Tea (P80.00):</label>
									<input type="number" id="Rose-Tea" name="Rose-Tea" min="0" value="0">
									<button type="button" onclick="addToCart('Rose-Tea')">Add to Cart</button>
								</li>
								<li class="order-item">
									<label for="Pineapple-Smootea">Pineapple Smootea(P120.00):</label>
									<input type="number" id="Pineapple-Smootea" name="Pineapple-Smootea" min="0" value="0">
									<button type="button" onclick="addToCart('Pineapple-Smootea')">Add to Cart</button>
								</li>
								<li class="order-item">
									<label for="Strawberry-Smootea">Strawberry Smootea(P120.00):</label>
									<input type="number" id="Strawberry-Smootea" name="Strawberry-Smootea" min="0" value="0">
									<button type="button" onclick="addToCart('Strawberry-Smootea')">Add to Cart</button>
								</li>
								<li class="order-item">
									<label for="Lychee-Smootea">Lychee Smootea(P120.00):</label>
									<input type="number" id="Lychee-Smootea" name="Lychee-Smootea" min="0" value="0">
									<button type="button" onclick="addToCart('Lychee-Smootea')">Add to Cart</button>
								</li>
								<li class="order-item">
									<label for="Pistachio-Tartufo">Chocolate Pistachio Tartufo(P200.00):</label>
									<input type="number" id="Pistachio-Tartufo" name="Pistachio-Tartufo" min="0" value="0">
									<button type="button" onclick="addToCart('Pistachio-Tartufo')">Add to Cart</button>
								</li>
								<li class="order-item">
									<label for="Mousse-Parfait">Chocolate Mousse Parfait(P150.00):</label>
									<input type="number" id="Mousse-Parfait" name="Mousse-Parfait" min="0" value="0">
									<button type="button" onclick="addToCart('Mousse-Parfait')">Add to Cart</button>
								</li>
								<li class="order-item">
									<label for="Strawberry-Napoleon">Strawberry Napoleon(P250.00):</label>
									<input type="number" id="Strawberry-Napoleon" name="Strawberry-Napoleon" min="0" value="0">
									<button type="button" onclick="addToCart('Strawberry-Napoleon')">Add to Cart</button>
								</li>
								<li class="order-item">
									<label for="Coffee-Creme-Caramel">Coffee Crème Caramel(P140.00):</label>
									<input type="number" id="Coffee-Creme-Caramel" name="Coffee-Creme-Caramel" min="0" value="0">
									<button type="button" onclick="addToCart('Coffee-Creme-Caramel')">Add to Cart</button>
								</li>
								<li class="order-item">
									<label for="Upside-Down-Cake">Black Forest Upside-Down Cake(P1,000.00):</label>
									<input type="number" id="Upside-Down-Cake" name="Upside-Down-Cake" min="0" value="0">
									<button type="button" onclick="addToCart('Upside-Down-Cake')">Add to Cart</button>
								</li>
								<li class="order-item">
									<label for="Mango-Sorbet">Mango Sorbet(P100.00):</label>
									<input type="number" id="Mango-Sorbet" name="Mango-Sorbet" min="0" value="0">
									<button type="button" onclick="addToCart('Mango-Sorbet')">Add to Cart</button>
								</li>
								<li class="order-item">
									<label for="Pots-de-Crème">Chocolate Pots de Crème(P150.00):</label>
									<input type="number" id="Pots-de-Crème" name="Pots-de-Crème" min="0" value="0">
									<button type="button" onclick="addToCart('Pots-de-Crème')">Add to Cart</button>
								</li>
								<li class="order-item">
									<label for="Lemon-Cake">Meyer-Lemon and Coconut Layer Cake(P1,800.00):</label>
									<input type="number" id="Lemon-Cake" name="Lemon-Cake" min="0" value="0">
									<button type="button" onclick="addToCart('Lemon-Cake')">Add to Cart</button>
								</li>
							</ul>
							<button type="submit">Submit Order</button>
						</form>
				
						<div id="cart-summary">
							<h3>Cart Summary</h3>
							<ul id="cart-items"></ul>
							<p id="total-cost"></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="modal.js"></script>
		<footer>
			<p><small>Made by Abalain, Almaida, Catimbang, Cuano & Morante 2024 © Copyright Intended</small></p>
		</footer>
	</body>
</html>