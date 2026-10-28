@extends('layouts.app')

@section('content')

<section class="login-page">
    <div class="container">
        <div class="row align-items-center min-vh-100">

            <!-- Left Side -->
            <div class="col-lg-6">
                <div class="login-image text-center">
                    <img src="{{ asset('images/cover/cover 1.png') }}" class="img-fluid" alt="Register">
                </div>
            </div>

            <!-- Right Side -->
            <div class="col-lg-6">
                <div class="login-card">
                    <h2>Create Account</h2>
                    <p class="text-muted mb-4">Join Natural Glow and enjoy your shopping experience.</p>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
                            @error('name')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control" required>
                            @error('email')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                            @error('password')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-4">
                            <label>Confirm Password</label>

                            <input type="password" name="password_confirmation" class="form-control" required>
                        </div>
                        <button class="btn btn-success w-100">Create Account</button>
                        <div class="text-center mt-3">
                            Already have an account?
                            <a href="{{ route('login') }}"> Login </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection