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
    <section class="blog-section py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="main-blog-card">
                        <img src="{{ asset('assets/images/no-img.jpg') }}" alt="blog-img">
                        <div class="overlay-content">
                            <span class="date"><i class="fa-regular fa-clock me-1"></i>04 May 2026</span>
                            <h4>How to Become a Full Stack Developer</h4>
                            <p>Learn step by step roadmap to become a modern full stack developer...</p>
                            <a href="{{ url('/blog-details') }}" class="read-more">Read More<i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="main-blog-card">
                        <img src="{{ asset('assets/images/no-img.jpg') }}" alt="blog-img">
                        <div class="overlay-content">
                            <span class="date"><i class="fa-regular fa-clock me-1"></i>03 May 2026</span>
                            <h4>Laravel Advanced Tips & Tricks</h4>
                            <p>Boost your Laravel skills with real world advanced techniques...</p>
                            <a href="{{ url('/blog-details') }}" class="read-more">Read More<i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="main-blog-card">
                        <img src="{{ asset('assets/images/no-img.jpg') }}" alt="blog-img">
                        <div class="overlay-content">
                            <span class="date"><i class="fa-regular fa-clock me-1"></i>03 May 2026</span>
                            <h4>Laravel Advanced Tips & Tricks</h4>
                            <p>Boost your Laravel skills with real world advanced techniques...</p>
                            <a href="{{ url('/blog-details') }}" class="read-more">Read More<i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="main-blog-card">
                        <img src="{{ asset('assets/images/no-img.jpg') }}" alt="blog-img">
                        <div class="overlay-content">
                            <span class="date"><i class="fa-regular fa-clock me-1"></i>03 May 2026</span>
                            <h4>Laravel Advanced Tips & Tricks</h4>
                            <p>Boost your Laravel skills with real world advanced techniques...</p>
                            <a href="{{ url('/blog-details') }}" class="read-more">Read More<i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="main-blog-card">
                        <img src="{{ asset('assets/images/no-img.jpg') }}" alt="blog-img">
                        <div class="overlay-content">
                            <span class="date"><i class="fa-regular fa-clock me-1"></i>03 May 2026</span>
                            <h4>Laravel Advanced Tips & Tricks</h4>
                            <p>Boost your Laravel skills with real world advanced techniques...</p>
                            <a href="{{ url('/blog-details') }}" class="read-more">Read More<i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="main-blog-card">
                        <img src="{{ asset('assets/images/no-img.jpg') }}" alt="blog-img">
                        <div class="overlay-content">
                            <span class="date"><i class="fa-regular fa-clock me-1"></i>03 May 2026</span>
                            <h4>Laravel Advanced Tips & Tricks</h4>
                            <p>Boost your Laravel skills with real world advanced techniques...</p>
                            <a href="{{ url('/blog-details') }}" class="read-more">Read More<i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pagination-wrapper mt-5">
                <ul class="pagination">
                    <li><a href="#"><i class="fa-solid fa-angle-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a class="active" href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa-solid fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
@endsection
