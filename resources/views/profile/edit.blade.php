@extends('layouts.app')

@section('content')

<section class="login-page profile-page">
    <div class="container py-5">
        <div class="login-card mx-auto">
            <h2 class="mb-2">My Profile</h2>
            <p class="text-muted mb-4">Manage your account settings.</p>
            @include('profile.partials.update-profile-information-form')
            <hr class="my-5">
            @include('profile.partials.update-password-form')
            <hr class="my-5">
            @include('profile.partials.delete-user-form')
        </div>
    </div>
</section>

@endsection