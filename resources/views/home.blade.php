@extends('layouts.app')
@section('content')
<!-- Header Section -->
<section class="header">

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1>
                    Nourish.<br>
                    <span>Glow.</span><br>
                    Repeat.
                </h1>
                <p>Gentle skincare inspired by nature,crafted <br> for healthy, radiant skin.</p>
                <p>Discover premium products for skin, hair, body & fragrance</p>
                <a href="#skin" class="btn btn-success">Shop Now</a>
                <div class="features mt-5">
                    <div>
                        <i class="fa-solid fa-leaf"></i>
                        <p>Clean Ingredients</p>
                    </div>
                    <div>
                        <i class="fa-solid fa-heart"></i>
                        <p>Cruelty Free</p>
                    </div>
                    <div>
                        <i class="fa-solid fa-face-smile"></i>
                        <p>For All Skin Types</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Products -->
@foreach($categories as $category)

@if($category->id == 1)
<section class="products py-5" id="skin">
    @elseif($category->id == 2)
    <section class="products py-5" id="hair">
        @elseif($category->id == 3)
        <section class="products py-5" id="body">
            @elseif($category->id == 4)
            <section class="products py-5" id="perfume">
                @endif
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2>{{ $category->name }}</h2>
                        @if($category->id == 1)
                        <a href="{{ route('skin.care') }}" class="btn btn-outline-dark">View All</a>
                        @elseif($category->id == 2)
                        <a href="{{ route('hair.care')}}" class="btn btn-outline-dark">View All</a>
                        @elseif($category->id == 3)
                        <a href="{{ url('/body') }}" class="btn btn-outline-dark">View All</a>
                        @elseif($category->id == 4)
                        <a href="{{ url('/perfume') }}" class="btn btn-outline-dark">View All</a>
                        @endif
                    </div>

                    <!-- Cards -->
                    <div class="row g-4">
                        @foreach($category->products as $product)
                        <div class="col-lg-3 col-md-6">
                            <div class="card product-card">
                                <img src="{{ asset($product->image) }}" class="card-img-top">
                                <div class="card-body">
                                    <h5>{{ $product->name }}</h5>
                                    <p>{{ $product->description }}</p>
                                    <div class="stars">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <i class="fa-solid fa-star"></i>
                                            @endfor
                                            ({{ $product->reviews }})
                                    </div>
                                    <h5 class="price">EGP {{ $product->price }}</h5>

                                    <form action="{{ route('cart.add', $product->id) }}"
                                        method="POST"
                                        class="add-to-cart-form">
                                        @csrf
                                        <button type="submit" class="btn btn-success w-100">
                                            Add To Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </section>
    </section>
</section>
@endforeach
@endsection