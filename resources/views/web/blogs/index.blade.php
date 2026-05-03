@extends('layouts.web.master')

@section('title')
    {{ __('Blog List') }}
@endsection

@section('main_content')
    <div class="breadcrumb-area">
        <div class="container">
            <ul class="breadcrumb">
                <li><i class="fa-solid fa-house-user me-1"></i><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Blogs</li>
            </ul>
        </div>
    </div>
@endsection
