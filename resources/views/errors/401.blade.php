@extends('layouts.error-blank')

@section('title')
    {{ __('401') }}
@endsection

@section('main_content')
<div class="error-page">
    <div class="error-card">
        <div class="error-code">{{ __('401') }}</div>
        <h3 class="error-title">{{ __('Unauthorized Access') }}</h3>
        <p class="error-text">{{ __('You need to login first to access this page.') }}</p>

        <a href="{{ route('login') }}" class="btn btn-primary pt-1">
            {{ __('Login Now') }}
        </a>
    </div>
</div>
@endsection
