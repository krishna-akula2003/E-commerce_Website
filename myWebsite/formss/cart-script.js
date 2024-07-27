// cart-script.js

document.addEventListener('DOMContentLoaded', function () {
    // Get the cart items from localStorage
    let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

    // Get the cart-items element
    let cartItemsElement = document.getElementById('cart-items');

    // Iterate through each item in the cart and create list items
    cartItems.forEach(function (item) {
        let listItem = document.createElement('div'); // Change from 'li' to 'div' for better styling
        // Create an image element
        let imageElement = document.createElement('img');
        imageElement.src = item.image; // Check the path here
        imageElement.alt = item.name;
        imageElement.style.width = '150px'; // Adjust the size as needed
        // Create a text node for the product name
        let textNode = document.createTextNode(item.name);

        // Create a remove button
        let removeButton = document.createElement('button');
        removeButton.innerText = 'Remove';
        removeButton.addEventListener('click', function () {
            // Remove the item from the cart
            removeFromCart(item);
            // Remove the corresponding element from the cart view
            listItem.remove();
        });

        // Append the image, text, and remove button to the list item
        listItem.appendChild(imageElement);
        listItem.appendChild(textNode);
        listItem.appendChild(removeButton);

        // Append the list item to the cart-items element
        cartItemsElement.appendChild(listItem);
    });
});

function removeFromCart(item) {
    // Get the cart items from localStorage
    let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

    // Find the index of the item to be removed
    let index = cartItems.findIndex(cartItem => cartItem.name === item.name);

    // Remove the item from the cart
    if (index !== -1) {
        cartItems.splice(index, 1);
    }

    // Save the updated cart items to localStorage
    localStorage.setItem('cartItems', JSON.stringify(cartItems));
}