@extends('layouts.error-blank')

@section('title')
    {{ __('500') }}
@endsection

@section('main_content')
<div class="error-page">
    <div class="error-card">
        <div class="error-code">{{ __('500') }}</div>
        <h3 class="error-title">{{ __('Server Error') }}</h3>
        <p class="error-text">{{ __('Something went wrong on our side. Please try again later.') }}</p>

        <a href="{{ url('/') }}" class="btn btn-primary pt-1">
            {{ __('Retry Home') }}
        </a>
    </div>
</div>
@endsection
