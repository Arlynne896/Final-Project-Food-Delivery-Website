    const prices = {
        "Presso-Milk-Tea": 75,
        "Thai-Tea": 80,
        "Okinawa-Milk-Tea": 90,
        "Mango-Tea": 120,
        "Taro-Tea": 90,
        "Duo-Grape-Tea": 149,
        "Rose-Tea": 80,
        "Pineapple-Smootea": 120,
        "Strawberry-Smootea": 120,
        "Lychee-Smootea": 120,
        "Pistachio-Tartufo": 200,
        "Mousse-Parfait": 150,
        "Strawberry-Napoleon": 250,
        "Coffee-Creme-Caramel": 140,
        "Upside-Down-Cake": 1000,
        "Mango-Sorbet": 100,
        "Pots-de-Crème": 150,
        "Lemon-Cake": 1800,
    };

    const cart = {};
    function addToCart(item) {
        const quantity = parseInt(document.getElementById(item).value) || 0;
        if (quantity > 0) {
            cart[item] = (cart[item] || 0) + quantity; 
            document.getElementById(item).value = 0; 
            updateCartSummary(); 
        } else {
            alert("Please enter a valid quantity.");
        }
    }
    function removeFromCart(item) {
        if (cart[item]) {
            delete cart[item]; 
            updateCartSummary(); 
        }
    }
    function updateCartSummary() {
        const cartItems = document.getElementById('cart-items');
        const totalCostElement = document.getElementById('total-cost');
        cartItems.innerHTML = ''; 
        let totalCost = 0;

        for (const item in cart) {
            if (cart[item] > 0) {
                const itemCost = cart[item] * prices[item];
                totalCost += itemCost;

                const listItem = document.createElement('li');
                listItem.innerHTML = `
                    ${cart[item]} x ${item.replace('-', ' ')}: P${itemCost}
                    <button onclick="removeFromCart('${item}')">Remove</button>
                `;
                cartItems.appendChild(listItem);
            }
        }

        totalCostElement.textContent = `Total Cost: P${totalCost}`;
    }


    document.querySelector('.order-form').addEventListener('submit', function(event) {
        event.preventDefault(); 

        if (Object.keys(cart).length === 0) {
            alert("Please add items to your cart before submitting.");
            return;
        }

        let orderSummary = "Order Summary:\n";
        let totalCost = 0;
        for (const item in cart) {
            const quantity = cart[item];
            if (quantity > 0) {
                const itemCost = quantity * prices[item];
                orderSummary += `${quantity} x ${item.replace('-', ' ')}: P${itemCost}\n`;
                totalCost += itemCost;
            }
        }

        alert(`${orderSummary}\nTotal Cost: P${totalCost}`);

        Object.keys(cart).forEach(item => delete cart[item]);
        updateCartSummary();
        closePopup();
    });
    function openPopup() {
        document.getElementById("orderPopup").style.display = "flex";
    }
    function closePopup() {
        document.getElementById("orderPopup").style.display = "none";
    }
    window.onclick = function(event) {
        const popup = document.getElementById("orderPopup");
        if (event.target == popup) {
            closePopup();
        }
    };


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
	

