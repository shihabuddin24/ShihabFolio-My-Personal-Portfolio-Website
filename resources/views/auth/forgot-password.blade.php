@extends('layouts.auth.master')

@section('title')
    {{ __('Forgot Password') }}
@endsection

@section('main_content')
    <div class="login-box">
        <div class="login-icon">
            <img src="{{ asset('assets/images/web-logo.png') }}" alt="login-img">
        </div>
        <h2>Forgot Password?</h2>
        <p class="subtitle text-secondary">Enter your email to continue</p>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <div class="input-icon-wrap">
                <i class="fa-regular fa-envelope input-icon"></i>
                <input type="email" class="form-control has-icon" placeholder="you@example.com">
            </div>
        </div>

        <button class="btn-login mt-3">Continue</button>

        <a href="{{ url('/login') }}" class="btn-home mb-0 text-secondary">
            <i class="fa-solid fa-arrow-left"></i>
            Back to Login
        </a>
    </div>
@endsection
