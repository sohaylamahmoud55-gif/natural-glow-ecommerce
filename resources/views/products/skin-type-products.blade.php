@extends('layouts.app')
@section('content')

<!-- <section class="page-header">
    <div class="container text-center">
        <h1>Skin Type Products</h1>
    </div>
</section> -->
<section class="page-header">
    <h1 class="text-center mb-5">
        Skin Care >
        <span class="skin-type-name">
            {{ $skinType->name }}
        </span>
    </h1>
</section>
<div class="container py-5 mt-5">
    <div class="row g-4">
        @foreach($products as $product)
        <div class="col-lg-3 col-md-6">
            <div class="card product-card">
                <img src="{{ asset($product->image) }}" class="card-img-top">
                <div class="card-body">
                    <h5>{{ $product->name }}</h5>
                    <p>{{ $product->description }}</p>
                    <div class="stars">
                        @for($i=1;$i<=5;$i++)
                            <i class="fa-solid fa-star"></i>
                            @endfor
                            ({{ $product->reviews }})
                    </div>
                    <h5 class="price">
                        EGP {{ $product->price }}
                    </h5>

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
    <div class="d-flex justify-content-center mt-5">
        {{ $products->links() }}
    </div>
</div>
@endsection