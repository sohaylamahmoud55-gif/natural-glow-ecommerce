@extends('layouts.app')
@section('content')
<section class="page-header">
    <div class="container text-center">
        <h1>Checkout</h1>
        <p>
            Review your order and complete your purchase securely.
        </p>
    </div>
</section>
<section class="checkout-page py-5 mt-5">
    <div class="container">
        <div class="row">

            <!-- Billing -->
            <div class="col-lg-7">
                <div class="card shadow-sm p-4 border-0">
                    <h4 class="mb-4">Billing Details</h4>

                    <form action="{{ route('checkout.place') }}" method="POST" id="checkout-form">
                        @csrf

                        <div id="checkout-error" class="alert alert-danger d-none"></div>

                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control"
                                value="{{ auth()->user()->name }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control"
                                value="{{ auth()->user()->email }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="text" name="phone" value="{{ old('phone') }}"
                                class="form-control" placeholder="Enter phone number">
                            <small class="text-danger error-message" data-error="phone"></small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">City</label>
                            <input type="text" name="city" value="{{ old('city') }}"
                                class="form-control" placeholder="Enter city">
                            <small class="text-danger error-message" data-error="city"></small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <textarea name="address" class="form-control"
                                rows="4" placeholder="Enter your address">{{ old('address') }}</textarea>
                            <small class="text-danger error-message" data-error="address"></small>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Payment Method</label>
                            <select name="payment_method" class="form-select">
                                <option value="">Choose Payment Method</option>
                                <option value="Cash On Delivery"
                                    {{ old('payment_method') == 'Cash On Delivery' ? 'selected' : '' }}>
                                    Cash On Delivery
                                </option>
                                <option value="Visa"
                                    {{ old('payment_method') == 'Visa' ? 'selected' : '' }}>
                                    Visa
                                </option>
                            </select>
                            <small class="text-danger error-message"
                                data-error="payment_method"></small>
                        </div>

                        <button type="submit" id="place-order-btn"
                            class="btn btn-success w-100 mt-4">
                            Place Order
                        </button>
                    </form>

                </div>
            </div>

            <!-- Summary -->
            <div class="col-lg-5">
                <div class="card shadow-sm p-4 border-0">
                    <h4 class="mb-4">Order Summary</h4>
                    @foreach($cart->items as $item)
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <strong>
                                {{ $item->product->name }}
                            </strong>
                            <br>
                            x{{ $item->quantity }}
                        </div>
                        <span>
                            EGP
                            {{ $item->product->price * $item->quantity }}
                        </span>
                    </div>
                    @endforeach
                    <hr>
                    <div class="d-flex justify-content-between">
                        <h5>Total</h5>
                        <h5>EGP {{ $total }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('checkout-form');

        if (!form) return;

        const button = document.getElementById('place-order-btn');
        const errorBox = document.getElementById('checkout-error');
        let errorTimeout;

        function showError(message) {
            clearTimeout(errorTimeout);

            errorBox.textContent = message;
            errorBox.classList.remove('d-none');

            errorTimeout = setTimeout(() => {
                errorBox.classList.add('d-none');
                errorBox.textContent = '';
            }, 5000);
        }

        form.addEventListener('submit', async function(e) {
            e.preventDefault();

            // Clear previous errors
            form.querySelectorAll('.error-message').forEach(el => {
                el.textContent = '';
            });

            form.querySelectorAll('.is-invalid').forEach(el => {
                el.classList.remove('is-invalid');
            });

            errorBox.textContent = '';
            errorBox.classList.add('d-none');

            const originalText = button.textContent;
            button.disabled = true;
            button.textContent = 'Processing...';

            try {
                const response = await fetch(form.action, {
                    method: 'POST',
                    body: new FormData(form),
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    }
                });

                const data = await response.json();

                if (response.status === 422) {
                    const errors = data.errors || {};

                    Object.entries(errors).forEach(([field, messages]) => {
                        const errorElement = form.querySelector(
                            `[data-error="${field}"]`
                        );

                        const input = form.querySelector(
                            `[name="${field}"]`
                        );

                        if (errorElement) {
                            errorElement.textContent = messages[0];
                        }

                        if (input) {
                            input.classList.add('is-invalid');
                        }
                    });

                    showError('Please check the required fields below.');

                    return;
                }

                if (!response.ok) {
                    throw new Error(data.message || 'Could not place your order.');
                }

                if (data.success && data.redirect) {
                    window.location.href = data.redirect;
                    return;
                }

                throw new Error(data.message || 'Something went wrong.');

            } catch (error) {
                showError(
                    error.message || 'Something went wrong. Please try again.'
                );
            } finally {
                button.disabled = false;
                button.textContent = originalText;
            }
        });

        // Remove a field's error as the user edits it
        form.querySelectorAll('input[name], textarea[name], select[name]')
            .forEach(input => {
                input.addEventListener('input', clearFieldError);
                input.addEventListener('change', clearFieldError);

                function clearFieldError() {
                    input.classList.remove('is-invalid');

                    const errorElement = form.querySelector(
                        `[data-error="${input.name}"]`
                    );

                    if (errorElement) {
                        errorElement.textContent = '';
                    }
                }
            });
    });
</script>

@endsection