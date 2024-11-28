<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="burgo.css">
    <link rel="icon" type="x-icon" href="burgo.jpg">
    <title>Bur-go House</title>
    
</head>
<body> 
    <nav>
        <div class="logo">
            <h1 style="color:white">Bur-Go House</h1>
        </div>
        <ul>
            <li><a href="#menu">Menu</a></li>
            <li><a href="javascript:void(0);" onclick="openPopup()">Order</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="../home.php">Home</a></li>
        </ul>
    </nav>

    <div class="hero">
        <h1>Welcome to Bur-Go House</h1>
    </div>

    
    <section id="menu" class="menu">
        <h2>Our Menu</h2>
        <div class="menu-items">
            <div class="menu-item">
                <img src="regular.png" alt="Regular Burger" style="border-radius: 8px; width: 150px; height: 100px; margin-left: 10px;">
                <h3>Regular Burger</h3>
                <p>Juicy beef patty with our signature sauce.</p>
                <p><strong>P50.00</strong></p>
            </div>
            <div class="menu-item">
                <img src="cheese.png" alt="Cheese Burger" style="border-radius: 8px; width: 200px; height: 130px; margin-left: 10px;"> 
                <h3>Cheese Burger</h3>
                <p>Cheesy burger with onions, tomatoes and pickles in it.</p> 
                <p><strong>P75.00</strong></p>
            </div>
            <div class="menu-item">
                <img src="vegie.png" alt="Vegie" style="border-radius: 8px; width: 200px; height: 100px; margin-left: 10px;"> 
                <h3>Vegie Burger</h3>
                <p>Plant-based patty, vegan cheese, avocado, and fresh veggies.</p>
                <p><strong>P75.00</strong></p>
            </div>
            <div class="menu-item">
                <img src="overload.png" alt="Vegie" style="border-radius: 8px; width: 200px; height: 100px; margin-left: 10px;"> 
                <h3>Overload Burger</h3>
                <p>Overload to its flavor with double patty, bacon, cheese, and some mayo.</p>
                <p><strong>P150.00</strong></p>
            </div>
            <div class="menu-item">
                <img src="fries.png" alt="Fries" style="border-radius: 8px; width: 170px; height: 100px; margin-left: 10px;"> 
                <h3>Fries</h3>
                <p>It comes with diffrent falvors like cheese, bbq, and sweet and sour.</p>
                <p><strong>P50.00</strong></p>
            </div>
            <div class="menu-item">
                <img src="mojo.png" alt="Mojo" style="border-radius: 8px; width: 170px; height: 100px; margin-left: 10px;"> 
                <h3>Mojos</h3>
                <p>Golden, crispy potato slices seasoned to perfection and served with a variety of flavors like rich cheese, smoky BBQ, and tangy sweet and sour.</p>
                <p><strong>P75.00</strong></p>
            </div>
            <div class="menu-item">
                <img src="icetea.png" alt="Iced Tea" style="border-radius: 8px; width: 90px; height: 140px; margin-left: 5px;"> 
                <h3>Iced Tea</h3>
                <p> mixed with flavored syrup with multiple common flavors including lemon, apple, and lime. </p>
                <p><strong>P35.00</strong></p>
            </div>
        </div>
        <button class="order-now-btn" onclick="openPopup()">Order Now</button>
    </section>
    
    <div id="orderPopup" class="popup">
        <div class="popup-content">
            <span class="close-btn" onclick="closePopup()">&times;</span>
            <h2>Place Your Order</h2>
            
            <form class="order-form">
                <ul class="popup-menu-list">
                    <li class="order-item">
                        <label for="regular-burger">Regular Burger (P50.00):</label>
                        <input type="number" id="regular-burger" name="regular-burger" min="0" value="0">
                        <button type="button" onclick="addToCart('regular-burger')">Add to Cart</button>
                    </li>
                    <li class="order-item">
                        <label for="cheese-burger">Cheese Burger (P75.00):</label>
                        <input type="number" id="cheese-burger" name="cheese-burger" min="0" value="0">
                        <button type="button" onclick="addToCart('cheese-burger')">Add to Cart</button>
                    </li>
                    <li class="order-item">
                        <label for="vegie-burger">Vegie Burger (P75.00):</label>
                        <input type="number" id="vegie-burger" name="vegie-burger" min="0" value="0">
                        <button type="button" onclick="addToCart('vegie-burger')">Add to Cart</button>
                    </li>
                    <li class="order-item">
                        <label for="overload-burger">Overload Burger (P150.00):</label>
                        <input type="number" id="overload-burger" name="overload-burger" min="0" value="0">
                        <button type="button" onclick="addToCart('overload-burger')">Add to Cart</button>
                    </li>
                    <li class="order-item">
                        <label for="fries">Fries (P50.00):</label>
                        <input type="number" id="fries" name="fries" min="0" value="0">
                        <button type="button" onclick="addToCart('fries')">Add to Cart</button>
                    </li>
                    <li class="order-item">
                        <label for="mojos">Mojos (P75.00):</label>
                        <input type="number" id="mojos" name="mojos" min="0" value="0">
                        <button type="button" onclick="addToCart('mojos')">Add to Cart</button>
                    </li>
                    <li class="order-item">
                        <label for="iced-tea">Iced Tea (P35.00):</label>
                        <input type="number" id="iced-tea" name="iced-tea" min="0" value="0">
                        <button type="button" onclick="addToCart('iced-tea')">Add to Cart</button>
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
    
    
    <section id="about" class="about">
        <h2>About Us</h2>
        <p>Welcome to the Bur-Go House. Your destination for delicious, handcrafted burgers!, were passionate about creating the ultimate burger experience using the freshest ingredients.</p>
    </section>

    <section id="contact" class="contact">
        <h2>Contact Us</h2>
        <form class="contact-form">
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="Your Email" required>
            <textarea rows="5" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Bur-Go House. All rights reserved.</p>
    </footer> 
    <script src="burgo.js"></script>
</body>
</html>
