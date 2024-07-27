// script.js

function addToCart(productName, image) {
    // Get the cart items from localStorage
    let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

    // Check if the item is already in the cart
    let existingItem = cartItems.find(item => item.name === productName);
    if (!existingItem) {
        // Item not in cart, add it
        cartItems.push({ name: productName, image: image });
        // Update localStorage with the modified cart
        localStorage.setItem('cartItems', JSON.stringify(cartItems));
        alert('Item added to cart!');
    } else {
        // Item already in cart, show a message
        alert('Item is already in the cart!');
    }
}