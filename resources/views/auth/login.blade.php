@extends('layouts.auth.master')

@section('title')
    {{ __('Login') }}
@endsection

@section('main_content')
    <div class="login-box">
        <div class="login-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2Zm0 3a3 3 0 1 1-3 3 3 3 0 0 1 3-3Zm0 14.2a7.2 7.2 0 0 1-6-3.22c.03-2 4-3.08 6-3.08s5.97 1.08 6 3.08a7.2 7.2 0 0 1-6 3.22Z" />
            </svg>
        </div>
        <h2>Login to Dashboard</h2>
        <p class="subtitle">Enter your credentials to access your account</p>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <div class="input-icon-wrap">
                <span class="input-icon">✉</span>
                <input type="email" class="form-control has-icon" placeholder="you@example.com">
            </div>
        </div>

        <div class="mb-0">
            <label class="form-label">Password</label>
            <div class="input-icon-wrap">
                <span class="input-icon">🔒</span>
                <input type="password" class="form-control has-icon" placeholder="Enter your password">
            </div>
        </div>

        <div class="btn-links-row">
            <a href="#" class="btn-home">← Back to Home</a>
            <a href="#" class="btn-forgot">Forgot Password?</a>
        </div>

        <button class="btn-login">Login →</button>

        <div class="divider"></div>
        <p class="footer-note">Protected with end-to-end encryption</p>
    </div>
@endsection
