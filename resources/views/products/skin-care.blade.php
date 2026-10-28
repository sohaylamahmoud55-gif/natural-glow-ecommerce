@extends('layouts.app')
@section('content')

<section class="page-header">
    <div class="container text-center">
        <h1>Our Products</h1>
    </div>
</section>
<div class="skincare">
    <div class="container py-5">
        <div class="categories-container">
            @foreach($skinTypes as $type)
            <div class="category-item">
                <a href="{{ route('skin.type',$type->id) }}" class="skin-link">
                    <div class="circle-image">
                        <img src="{{ asset('images/skin-types/'.$type->image) }}">
                        <div class="overlay">
                            {{ $type->name }}
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            <div class="category-item">
                <a href="{{ route('skin.test') }}" class="skin-link">
                    <div class="circle-image">
                        <img src="{{ asset('images/skin-types/test.jpg') }}">
                        <div class="overlay">
                            Skin Test
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <hr class="my-5">
        <div class="row g-4">
            @foreach($products as $product)
            <div class="col-lg-3 col-md-6">
                <div class="card product-card">
                    <img src="{{ asset($product->image) }}"
                        class="card-img-top">
                    <div class="card-body">
                        <h5>{{ $product->name }}</h5>
                        <p>{{ $product->description }}</p>
                        <div class="stars">
                            @for ($i = 1; $i <= 5; $i++)
                                <i class="fa-solid fa-star"></i>
                                @endfor
                                ({{ $product->reviews }})
                        </div>

                        <h5>
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
            <div class="d-flex justify-content-center mt-5">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>
@endsection