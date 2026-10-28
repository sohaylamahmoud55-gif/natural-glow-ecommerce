@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="page-header text-center">
    <div class="container">
        <h1>Perfume Collection</h1>
        <p>Discover elegant fragrances crafted to leave a lasting impression.</p>
    </div>
</section>

<!-- Products -->
<section class="container py-5">
    <div class="row">
        <div class="row g-4">
            @foreach($perfumes as $perfume)
            <div class="col-lg-3 col-md-6">
                <div class="card product-card">
                    <img src="{{ asset($perfume->image) }}" alt="{{ $perfume->name }}" class="img-fluid">
                    <div class="card-body">
                        <h5>{{ $perfume->name }}</h5>
                        <p>{{ $perfume->description }}</p>
                        <div class="stars">
                            @for($i=0;$i<5;$i++)
                                <i class="fa-solid fa-star"></i>
                                @endfor
                                ({{ $perfume->reviews }})
                        </div>
                        <h5 class="price">EGP {{ $perfume->price }}</h5>
                        <form action="{{ route('cart.add', $perfume->id) }}"
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
            {{ $perfumes->links() }}
        </div>
    </div>
</section>

@endsection