@extends('layouts.app')
@section('content')

<div class="skincare">
    @php
    switch($skinTypeId){

    case 1:
    $title="Dry Skin";
    $icon="fa-droplet";
    $message="Your skin needs deep hydration and gentle moisturizing products.";
    break;

    case 2:
    $title="Oily Skin";
    $icon="fa-water";
    $message="Your skin produces excess oil. Lightweight and oil-free products are best.";
    break;

    case 3:
    $title="Combination Skin";
    $icon="fa-circle-half-stroke";
    $message="Your skin is oily in some areas and dry in others. Balance is the key.";
    break;

    case 4:
    $title="Sensitive Skin";
    $icon="fa-heart";
    $message="Your skin is delicate. Choose soothing and fragrance-free skincare.";
    break;

    default:
    $title="Normal Skin";
    $icon="fa-face-smile";
    $message="Your skin is healthy and balanced. Maintain it with a simple routine.";
    }

    @endphp

    <div class="container py-5">
        <div class="result-card text-center">
            <i class="fa-solid {{ $icon }} result-icon"></i>
            <h1 class="mt-4">Your Skin Type</h1>
            <h2 class="mt-3 text-success">{{ $title }}</h2>
            <p class="mt-4">{{ $message }}</p>
            <a href="{{ route('skin.type',$skinTypeId) }}" class="btn btn-success mt-4">View Recommended Products</a>
        </div>
    </div>

</div>
@endsection