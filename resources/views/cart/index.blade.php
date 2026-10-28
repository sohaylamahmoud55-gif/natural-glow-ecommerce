@extends('layouts.app')
@section('content')

<section class="cart-page py-5">
    <div class="container">
        <h2 class="mb-4">My Cart</h2>
        @if($cart && $cart->items->count())
        @foreach($cart->items as $item)
        <div class="card cart-card p-3 mb-4" data-unit-price="{{ $item->product->price }}">
            <div class="row align-items-center">

                <!-- Product Image -->
                <div class="col-md-2 text-center">
                    <img src="{{ asset($item->product->image) }}" class="img-fluid rounded" alt="{{ $item->product->name }}">
                </div>

                <!-- Product Info -->
                <div class="col-md-6">
                    <h4>{{ $item->product->name }}</h4>
                    <p class="mb-1">
                        Unit Price: EGP {{ $item->product->price }}
                    </p>
                    <p class="mb-1">
                        Subtotal: EGP
                        <span class="item-subtotal">
                            {{ number_format($item->product->price * $item->quantity, 2) }}
                        </span>
                    </p>
                </div>
                <div class="col-md-3 d-flex flex-column justify-content-center align-items-center">

                    <!-- Quantity -->
                    <div class="d-flex align-items-center mb-3">
                        <h3 class="m-3">Quantity</h3>

                        <form action="{{ route('cart.decrease', $item->id) }}"
                            method="POST"
                            class="quantity-form">
                            @csrf
                            @method('PATCH')

                            <button type="submit" class="quantity-btn">
                                <i class="fa-solid fa-minus"></i>
                            </button>
                        </form>

                        <span class="mx-3 fw-bold fs-5 quantity-value">
                            {{ $item->quantity }}
                        </span>

                        <form action="{{ route('cart.increase', $item->id) }}"
                            method="POST"
                            class="quantity-form">
                            @csrf
                            @method('PATCH')

                            <button type="submit" class="quantity-btn">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </form>
                    </div>
                    <!-- Remove -->
                    <form action="{{ route('cart.remove', $item->id) }}" method="POST" class="remove-cart-form">
                        @csrf
                        @method('DELETE')
                        <button class="btn remove-btn">
                            <i class="fa-solid fa-trash"></i>
                            Remove
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
        <div class="d-flex justify-content-end mt-4">
            <div class="cart-summary">
                <p class="mb-2">Order summary</p>

                <div class="d-flex justify-content-between align-items-center gap-4 mb-3">
                    <span>Subtotal</span>
                    <strong>EGP <span id="cart-total">{{ number_format($total, 2) }}</span></strong>
                </div>

                <p class="small text-muted mb-3">
                    Shipping and taxes calculated at checkout.
                </p>

                <a href="{{ route('checkout') }}" class="btn btn-success w-100 py-2">
                    <i class="fa-solid fa-credit-card me-2"></i>
                    Checkout
                </a>
            </div>
        </div>
        @else
        <h4 class="text-center mt-5">Your cart is empty.</h4>
        @endif
    </div>
</section>

<script>
    window.updateCartTotal = function() {
        let cartTotal = 0;

        document.querySelectorAll('.cart-card').forEach(card => {
            const unitPrice = parseFloat(card.dataset.unitPrice) || 0;
            const quantityElement = card.querySelector('.quantity-value');
            const subtotalElement = card.querySelector('.item-subtotal');

            if (!quantityElement) return;

            const quantity = parseInt(quantityElement.textContent) || 0;
            const subtotal = unitPrice * quantity;

            if (subtotalElement) {
                subtotalElement.textContent = subtotal.toFixed(2);
            }

            cartTotal += subtotal;
        });

        const totalElement = document.getElementById('cart-total');

        if (totalElement) {
            totalElement.textContent = cartTotal.toFixed(2);
        }
    };

    document.querySelectorAll('.quantity-form').forEach(form => {
        form.addEventListener('submit', async function(e) {
            e.preventDefault();

            const button = form.querySelector('button');
            const card = form.closest('.cart-card');
            const quantity = card.querySelector('.quantity-value');

            button.disabled = true;

            try {
                const response = await fetch(form.action, {
                    method: 'POST',
                    body: new FormData(form),
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    }
                });

                if (!response.ok) {
                    throw new Error('Failed to update cart');
                }

                const data = await response.json();

                if (data.deleted) {
                    card.remove();
                    window.updateCartTotal();
                    const remainingCards =
                        document.querySelectorAll('.cart-card');

                    if (remainingCards.length === 0) {
                        document.querySelector('.cart-page .container').innerHTML =
                            '<h2 class="mb-4">My Cart</h2>' +
                            '<h4 class="text-center mt-5">Your cart is empty.</h4>';
                    }

                    return;
                }

                quantity.textContent = data.quantity;
                window.updateCartTotal();

            } catch (error) {
                console.error(error);
                alert('Something went wrong. Please try again.');
            } finally {
                button.disabled = false;
            }
        });
    });
</script>

@endsection