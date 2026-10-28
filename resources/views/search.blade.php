@extends('layouts.app')
@section('content')

<section class="products py-5 mt-5">
    <div class="container">
        <h2 class="mb-4">
            Search Results for:
            "{{ $search }}"
        </h2>
        @if($products->count())
            <div class="row g-4">
                @foreach($products as $product)
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card">
                        <img src="{{ asset($product->image) }}"
                             class="card-img-top">

                        <div class="card-body">
                            <h5>{{ $product->name }}</h5>
                            <p>{{ $product->description }}</p>
                            <h5 class="price">
                                EGP {{ $product->price }}
                            </h5>
                            <form action="{{ route('cart.add',$product->id) }}" method="POST">
                                @csrf
                                <button class="btn btn-success w-100">
                                    Add To Cart
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-5">
              <h3>No products found.</h3>
            </div>
        @endif
    </div>
</section>
@endsection