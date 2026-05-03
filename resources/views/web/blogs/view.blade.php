@extends('layouts.web.master')

@section('title')
    {{ __('Blog Details') }}
@endsection

@section('main_content')
    <div class="breadcrumb-area">
        <div class="container">
            <ul class="breadcrumb">
                <li><i class="fa-solid fa-house-user me-1"></i><a href="{{ url('/') }}">Home</a></li>
                <li><a href="#">Blogs</a></li>
                <li class="active">Blog Details</li>
            </ul>
        </div>
    </div>
@endsection
