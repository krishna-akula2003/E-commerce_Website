document.addEventListener('DOMContentLoaded', function() {
    // Sample products
    const products = [
        { id: 1, name: 'Product 1', price: 20 },
        { id: 2, name: 'Product 2', price: 30 },
        { id: 3, name: 'Product 3', price: 25 },
    ];

    // Function to display products
    function displayProducts() {
        const productDisplay = document.getElementById('product-display');

        products.forEach(product => {
            const productElement = document.createElement('div');
            productElement.classList.add('product');
            productElement.innerHTML = `
                <p>${product.name}</p>
                <p>$${product.price}</p>
                <button onclick="addToCart(${product.id})">Add to Cart</button>
            `;
            productDisplay.appendChild(productElement);
        });
    }

    // Function to add product to cart
    window.addToCart = function(productId) {
        const product = products.find(p => p.id === productId);
        if (product) {
            const cartItems = document.getElementById('cart-items');

            const cartItem = document.createElement('li');
            cartItem.classList.add('cart-item');
            cartItem.innerHTML = `
                ${product.name} - $${product.price}
                <button onclick="removeFromCart(${product.id})">Remove</button>
            `;

            cartItems.appendChild(cartItem);
        }
    };

    // Function to remove product from cart
    window.removeFromCart = function(productId) {
        const cartItems = document.getElementById('cart-items');
        const cartItem = document.querySelector(`.cart-item:contains("${products.find(p => p.id === productId).name}")`);
        if (cartItem) {
            cartItems.removeChild(cartItem);
        }
    };

    // Display initial products
    displayProducts();
});
