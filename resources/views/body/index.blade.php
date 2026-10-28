@extends('layouts.app')

@section('content')

<section class="page-header">
    <div class="container text-center">
        <h1>Bath & Body</h1>
        <p>Discover luxurious body care products made with natural ingredients.</p>
    </div>
</section>

<section class="products py-5">
    <div class="container">
        <div class="row g-4">
            @foreach($products as $product)
            <div class="col-lg-3 col-md-6">
                <div class="card product-card">
                    <img src="{{ asset($product->image) }}" class="card-img-top">
                    <div class="card-body">
                        <h5>{{ $product->name }}</h5>
                        <p>{{ $product->description }}</p>
                        <div class="stars">
                            @for($i=0;$i<5;$i++)
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

        <div class="mt-5 d-flex justify-content-center">
            {{ $products->links() }}
        </div>
    </div>
</section>
@endsection