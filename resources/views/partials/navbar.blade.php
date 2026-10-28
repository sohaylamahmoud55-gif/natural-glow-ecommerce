<nav class="navbar navbar-expand-lg bg-white py-3 shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold fs-3" href="{{ url('/home') }}">
            <i class="fa-solid fa-leaf"></i>
            Natural Glow
        </a>

        <div class="navbar-collapse d-flex align-items-center" id="nav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/home') }}#skin">Skin Care</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/home') }}#hair">Hair</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/home') }}#body">Bath & Body</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/home') }}#perfume">Perfume</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About Us</a>
                </li>
            </ul>
            <!-- search  -->
            <div class="d-flex align-items-center">
                <div class="search-box">
                    <form class="d-flex" action="{{ route('search') }}" method="GET">
                        <input class="form-control me-2" type="search" name="search" placeholder="Search products..." value="{{ request('search') }}">
                        <button type="submit" class="search-btn">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
            </div>

            <div class="icons d-flex align-items-center">
                @if(Auth::check())
                <a href="{{ route('profile.edit') }}">
                    <i class="fa-solid fa-user"></i>
                </a>
                @else
                <a href="{{ route('login') }}" class="me-3">
                    <i class="fa-solid fa-user"></i>
                </a>
                @endif
                <a href="{{ route('cart') }}" class="cart-icon position-relative">
                    <i class="fa-solid fa-cart-shopping"></i>
                    @auth
                    @php
                    $count = \App\Models\CartItem::whereHas('cart', function ($q) {
                    $q->where('user_id', auth()->id());
                    })->count();
                    @endphp

                    <span class="cart-count">
                        {{ $count }}
                    </span>
                    @endauth
                </a>
            </div>
        </div>
</nav>