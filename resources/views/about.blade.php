@extends('layouts.app')
@section('content')
<section class="hero-slider">
    <div id="aboutSlider" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">

        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#aboutSlider" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#aboutSlider" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#aboutSlider" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#aboutSlider" data-bs-slide-to="3"></button>
            <button type="button" data-bs-target="#aboutSlider" data-bs-slide-to="4"></button>
        </div>

        <!-- Images -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/about/slide1.jpg') }}" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/about/slide2.jpg') }}" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/about/slide3.jpg') }}" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/about/slide4.jpg') }}" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/about/slide5.jpg') }}" class="d-block w-100">
            </div>
        </div>

        <!-- Previous -->
        <button class="carousel-control-prev" type="button" data-bs-target="#aboutSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <!-- Next -->
        <button class="carousel-control-next" type="button" data-bs-target="#aboutSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</section>

<!-- Why Choose Us -->
<section class="why-us py-5">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-lg-3 col-md-6">
                <div class="feature-box">
                    <i class="fa-solid fa-leaf"></i>
                    <h5>Clean Ingredients</h5>
                    <p>We use safe, effective ingredients you can trust.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-box">
                    <i class="fa-solid fa-face-smile"></i>
                    <h5>Cruelty Free</h5>
                    <p>We never test on animals.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-box">
                    <i class="fa-solid fa-droplet"></i>
                    <h5>Dermatologist Tested</h5>
                    <p>
                        Safe and gentle
                        for every skin type.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-box">
                    <i class="fa-solid fa-seedling"></i>
                    <h5>Sustainable</h5>
                    <p>
                        Eco-friendly packaging
                        and practices.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Story Section -->
<section class="our-story py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2>Our Story</h2>
                <p class="mt-4">
                    At Natural Glow, we believe skincare should be
                    simple, effective, and inspired by nature.

                    Our journey began with one goal:
                    creating products that nourish every skin type
                    using carefully selected natural ingredients.
                </p>
                <p>
                    Every formula is crafted with love,
                    tested for quality,
                    and designed to help you feel confident
                    in your own skin.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="story-image">
                    <img src="{{ asset('images/about/story.jpg') }}"
                        class="img-fluid rounded shadow">
                    <div class="story-overlay">
                        <h2>
                            Discover the Power
                            <br>
                            of Gentle Skincare
                        </h2>
                        <p>
                            Our formulas are designed to work
                            in harmony with your skin,
                            not against it.
                        </p>
                        <a href="{{ url('/home') }}" class="btn btn-success">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Customer Reviews -->
<section class="reviews py-5">
    <div class="container">
        <h2 class="text-center mb-5">
            What Our Customers Say
        </h2>
        <div class="row g-4">
            <!-- Review 1 -->
            <div class="col-lg-4">
                <div class="review-card">
                    <div class="stars">
                        ★★★★★
                    </div>
                    <p>
                        "I've been using Natural Glow for
                        three months and my skin has never
                        looked healthier."
                    </p>
                    <div class="review-user">
                        <img src="{{ asset('images/about/user1.jpg') }}">
                        <div>
                            <h6>Sarah Ahmed</h6>
                            <span>Verified Customer</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="col-lg-4">
                <div class="review-card">
                    <div class="stars">
                        ★★★★★
                    </div>
                    <p>
                        "The products are gentle,
                        smell amazing,
                        and really work!"
                    </p>
                    <div class="review-user">
                        <img src="{{ asset('images/about/user2.jpg') }}">
                        <div>
                            <h6>Emily Brown</h6>
                            <span>Verified Customer</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Review 3 -->

            <div class="col-lg-4">
                <div class="review-card">
                    <div class="stars">
                        ★★★★★
                    </div>
                    <p>
                        "I finally found skincare
                        that suits my sensitive skin."
                    </p>
                    <div class="review-user">
                        <img src="{{ asset('images/about/user3.jpg') }}">
                        <div>
                            <h6>Olivia Smith</h6>
                            <span>Verified Customer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call To Action -->

<section class="cta-section">
    <div class="container">
        <div class="cta-box text-center">
            <h2>
                Ready to Start Your
                Skincare Journey?
            </h2>
            <p>
                Explore our natural skincare collection
                or discover your skin type
                with our free Skin Test.
            </p>
            <div class="mt-4">
                <a href="{{ route('skin.care') }}" class="btn btn-success me-3"> Shop Now</a>
                <a href="{{ route('skin.test') }}" class="btn btn-outline-dark">Take Skin Test </a>
            </div>
        </div>
    </div>
</section>
@endsection