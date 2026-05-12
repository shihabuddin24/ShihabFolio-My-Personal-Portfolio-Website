@extends('layouts.error-blank')

@section('title')
    {{ __('404') }}
@endsection

@section('main_content')
<div class="error-page">
    <div class="error-card">
        <div class="error-code">{{ __('404') }}</div>
        <h3 class="error-title">{{ __('Page Not Found') }}</h3>
        <p class="error-text">{{ __("The page you are looking for doesn't exist or has been moved.") }}</p>

        <a href="{{ url('/') }}" class="btn btn-primary pt-1">
            {{ __('Back to Home') }}
        </a>
    </div>
</div>
@endsection
