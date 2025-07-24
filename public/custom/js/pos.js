document.addEventListener('DOMContentLoaded', function () {
    const darkModeToggle = document.querySelector('.dark-mode-toggle input');
    const body = document.querySelector('body');
    const navLinks = document.querySelectorAll('.pos-nav ul li');

    darkModeToggle.addEventListener('change', function () {
        if (this.checked) {
            body.classList.add('dark-mode');
        } else {
            body.classList.remove('dark-mode');
        }
    });

    navLinks.forEach(link => {
        link.addEventListener('click', function () {
            navLinks.forEach(navLink => navLink.classList.remove('active'));
            this.classList.add('active');
        });
    });

    const productCards = document.querySelectorAll('.product-card');
    const cartItems = document.querySelector('.cart-items');
    const subtotal = document.querySelector('.summary-item:nth-child(1) span:nth-child(2)');
    const tax = document.querySelector('.summary-item:nth-child(2) span:nth-child(2)');
    const total = document.querySelector('.summary-item.total span:nth-child(2)');

    let cart = [];

    productCards.forEach(card => {
        card.addEventListener('click', function () {
            const productName = this.querySelector('h3').innerText;
            const productPrice = parseFloat(this.querySelector('p').innerText.replace('$', ''));

            addToCart(productName, productPrice);
        });
    });

    function addToCart(name, price) {
        const existingItem = cart.find(item => item.name === name);

        if (existingItem) {
            existingItem.quantity++;
        } else {
            cart.push({ name, price, quantity: 1 });
        }

        renderCart();
    }

    function renderCart() {
        cartItems.innerHTML = '';
        let subtotalPrice = 0;

        cart.forEach(item => {
            const cartItem = document.createElement('div');
            cartItem.classList.add('cart-item');
            cartItem.innerHTML = `
                <span>${item.name} (x${item.quantity})</span>
                <span>$${(item.price * item.quantity).toFixed(2)}</span>
            `;
            cartItems.appendChild(cartItem);

            subtotalPrice += item.price * item.quantity;
        });

        const taxPrice = subtotalPrice * 0.1;
        const totalPrice = subtotalPrice + taxPrice;

        subtotal.innerText = `$${subtotalPrice.toFixed(2)}`;
        tax.innerText = `$${taxPrice.toFixed(2)}`;
        total.innerText = `$${totalPrice.toFixed(2)}`;
    }
});
