@extends('layouts.auth.master')

@section('title')
    {{ __('Login') }}
@endsection

@section('main_content')
    <div class="login-box">
        <div class="login-icon">
            <img src="{{ asset('assets/images/web-logo.png') }}" alt="login-img">
        </div>
        <h2>Change your Password</h2>
        <p class="subtitle text-secondary">Create a new strong password</p>

        <div class="mb-3">
            <label class="form-label">New Password</label>
            <div class="input-icon-wrap">
                <i class="fa-solid fa-lock input-icon"></i>
                <input type="password" class="form-control has-icon" placeholder="Enter new password">
            </div>
        </div>

        <div class="mb-0">
            <label class="form-label">Confirm Password</label>
            <div class="input-icon-wrap">
                <i class="fa-solid fa-shield-halved input-icon"></i>
                <input type="password" class="form-control has-icon" placeholder="Confirm your password">
            </div>
        </div>

        <button class="btn-login mt-4 mb-2">Confirm</button>
    </div>
@endsection
