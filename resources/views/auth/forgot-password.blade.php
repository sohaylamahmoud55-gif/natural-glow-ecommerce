@extends('layouts.auth')

@section('content')

<div class="container login-page">

    <div class="row align-items-center min-vh-100">

        <!-- Left Side -->
        <div class="col-lg-7">
            <div class="login-image text-center">
                <img
                    src="{{ asset('images/cover/cover 1.png') }}"
                    class="img-fluid"
                    alt="Forgot Password">
            </div>
        </div>

        <!-- Right Side -->
        <div class="col-lg-5">

            <div class="login-card">

                <div class="text-center mb-4">

                    <i class="fa-solid fa-lock login-icon"></i>

                    <h2>Forgot Password?</h2>

                    <p>
                        No problem. Enter your email address and
                        we'll send you a password reset link.
                    </p>

                </div>

                <!-- Session Status -->
                <x-auth-session-status
                    class="mb-3"
                    :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}">

                    @csrf

                    <div class="mb-4">

                        <label class="form-label">
                            Email Address
                        </label>
                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            value="{{ old('email') }}"
                            required
                            autofocus>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <button class="btn reset-btn w-100">
                        Send Reset Link
                    </button>
                    <div class="text-center mt-4">
                        <a
                            href="{{ route('login') }}"
                            class="forgot-link">
                            Back to Login
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection