const prices = {
    "regular-burger": 50,
    "cheese-burger": 75,
    "vegie-burger": 75,
    "overload-burger": 150,
    "fries": 50,
    "mojos": 75,
    "iced-tea": 35
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
