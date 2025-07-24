@extends('pos')

@section('content')
<div class="pos-products">
    <div class="product-grid">
        @for ($i = 0; $i < 12; $i++)
        <div class="product-card">
            <img src="https://via.placeholder.com/150" alt="Product Image">
            <h3>Product Name</h3>
            <p>$10.00</p>
        </div>
        @endfor
    </div>
</div>
<div class="pos-cart">
    <div class="cart-header">
        <h2>Cart</h2>
    </div>
    <div class="cart-items">
        <!-- Cart items will go here -->
    </div>
    <div class="cart-summary">
        <div class="summary-item">
            <span>Subtotal</span>
            <span>$0.00</span>
        </div>
        <div class="summary-item">
            <span>Tax</span>
            <span>$0.00</span>
        </div>
        <div class="summary-item total">
            <span>Total</span>
            <span>$0.00</span>
        </div>
        <button class="checkout-btn">Checkout</button>
    </div>
</div>
@endsection
