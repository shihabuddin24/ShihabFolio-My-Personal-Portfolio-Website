@extends('layouts.error-blank')

@section('title')
    {{ __('403') }}
@endsection

@section('main_content')
<div class="error-page">
    <div class="error-card">
        <div class="error-code">{{ __('403') }}</div>
        <h3 class="error-title">{{ __('Access Denied') }}</h3>
        <p class="error-text">{{ __("You don't have permission to access this page.") }}</p>

        <a href="{{ url('/') }}" class="btn btn-primary pt-1">
            {{ __('Go Home') }}
        </a>
    </div>
</div>
@endsection
