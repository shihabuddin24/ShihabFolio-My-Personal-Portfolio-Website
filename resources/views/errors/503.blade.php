@extends('layouts.error-blank')

@section('title')
    {{ __('503') }}
@endsection

@section('main_content')
<div class="error-page">
    <div class="error-card">
        <div class="error-code">{{ __('503') }}</div>
        <h3 class="error-title">{{ __('Service Unavailable') }}</h3>
        <p class="error-text">{{ __('We are currently under maintenance. Please come back later.') }}</p>

        <a href="{{ url('/') }}" class="btn btn-primary pt-1">
            {{ __('Refresh Page') }}
        </a>
    </div>
</div>
@endsection
