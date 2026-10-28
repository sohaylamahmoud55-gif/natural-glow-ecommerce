<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natural Glow</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- icon -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('partials.navbar')
    @if(session('success'))
    <div id="success-message" class="custom-alert">
        {{ session('success') }}
    </div>
    @endif
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        setTimeout(function() {
            let message = document.getElementById('success-message');
            if (message) {
                message.style.transition = ".5s";
                message.style.opacity = 0;
                setTimeout(() => {
                    message.remove();
                }, 500);
            }
        }, 3000);
    </script>

    <script>
        document.addEventListener('submit', async function(e) {
            const addForm = e.target.closest('.add-to-cart-form');
            const removeForm = e.target.closest('.remove-cart-form');

            if (!addForm && !removeForm) return;

            e.preventDefault();

            const form = addForm || removeForm;
            const button = form.querySelector('button[type="submit"], button:not([type])');

            if (!button || button.disabled) return;

            const originalText = button.innerHTML;
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
                if (response.status === 401) {
                    window.location.href = "{{ route('login') }}";
                    return;
                }

                const data = await response.json();


                if (addForm) {
                    // Show the success message in its original location
                    let message = document.getElementById('success-message');

                    if (!message) {
                        message = document.createElement('div');
                        message.id = 'success-message';
                        message.className = 'custom-alert';

                        const navbar = document.querySelector('nav');

                        if (navbar) {
                            navbar.insertAdjacentElement('afterend', message);
                        } else {
                            document.body.prepend(message);
                        }
                    }

                    message.textContent =
                        data.message || 'Product added successfully.';

                    message.style.transition = '';
                    message.style.opacity = '1';

                    // Update cart counter if available
                    document.querySelectorAll('.cart-count').forEach(el => {
                        el.textContent = data.cart_count;
                    });

                    // Hide the message after 3 seconds
                    setTimeout(() => {
                        message.style.transition = 'opacity .5s';
                        message.style.opacity = '0';

                        setTimeout(() => {
                            message.remove();
                        }, 500);
                    }, 3000);
                }


                if (removeForm) {
                    const card = form.closest('.cart-card');

                    if (card) card.remove();
                    if (window.updateCartTotal) {
                        window.updateCartTotal();
                    }

                    document.querySelectorAll('.cart-count').forEach(el => {
                        el.textContent = data.cart_count;
                    });

                    if (document.querySelectorAll('.cart-card').length === 0) {
                        const container = document.querySelector(
                            '.cart-page .container'
                        );

                        if (container) {
                            const checkout = container.querySelector(
                                '.d-flex.justify-content-end.mt-4'
                            );

                            if (checkout) checkout.remove();

                            if (!container.querySelector('.empty-cart-message')) {
                                const message = document.createElement('h4');
                                message.className =
                                    'text-center mt-5 empty-cart-message';
                                message.textContent = 'Your cart is empty.';
                                container.appendChild(message);
                            }
                        }
                    }
                }

            } catch (error) {
                console.error(error);
                alert('Something went wrong. Please try again.');
            } finally {
                button.disabled = false;
            }
        });
    </script>
</body>

</html>