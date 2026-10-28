@extends('layouts.auth')

@section('content')

<section class="login-section py-5">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <!-- Left Side -->
            <div class="col-lg-6 d-none d-lg-block">
                <div class="login-image">
                    <img src="{{ asset('images/cover/cover 1.png') }}"class="img-fluid rounded-4 shadow">
                </div>
            </div>

            <!-- Right Side -->
            <div class="col-lg-5">
                <div class="login-card">
                    <div class="text-center mb-4">
                        <i class="fa-solid fa-leaf login-icon"></i>
                        <h2>Welcome Back</h2>
                        <p>Sign in to continue your skincare journey.</p>
                    </div>
                    <x-auth-session-status class="mb-3"
                        :status="session('status')" />
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            <x-input-error
                                :messages="$errors->get('email')"
                                class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" required>
                            <x-input-error
                                :messages="$errors->get('password')"
                                class="mt-2" />
                        </div>
                        <div class="d-flex justify-content-between mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                            @if(Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="forgot-link">Forgot Password?</a>
                            @endif
                        </div>
                        <button class="btn login-btn w-100">Login</button>
                        <div class="text-center mt-4">
                            Don't have an account?
                            <a href="{{ route('register') }}"> Create Account </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection