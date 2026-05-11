@extends('layouts.auth.master')

@section('title')
    {{ __('Login') }}
@endsection

@section('main_content')
    <div class="login-box">
        <div class="login-icon">
            <img src="{{ asset('assets/images/web-logo.png') }}" alt="login-img">
        </div>
        <h2>Login to Dashboard</h2>
        <p class="subtitle text-secondary">Enter your credentials to continue</p>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <div class="input-icon-wrap">
                <i class="fa-regular fa-envelope input-icon"></i>
                <input type="email" class="form-control has-icon" placeholder="you@example.com">
            </div>
        </div>

        <div class="mb-0">
            <label class="form-label">Password</label>
            <div class="input-icon-wrap">
                <i class="fa-solid fa-lock input-icon"></i>
                <input type="password" class="form-control has-icon" placeholder="Enter your password">
            </div>
        </div>

        <div class="btn-links-row">
            <div class="form-check remember-wrap">
                <input class="form-check-input remember-check" type="checkbox" id="rememberMe">
                <label class="form-check-label remember-label text-secondary" for="rememberMe">
                    Remember Me
                </label>
            </div>

            <a href="#" class="btn-forgot">Forgot Password?</a>
        </div>

        <button class="btn-login">Login</button>

        <a href="#" class="btn-home mb-0 text-secondary">
            <i class="fa-solid fa-arrow-left"></i>
            Back to Home
        </a>
    </div>
@endsection
