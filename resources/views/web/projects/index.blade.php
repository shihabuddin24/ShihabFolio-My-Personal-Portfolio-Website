@extends('layouts.web.master')

@section('title')
    {{ __('Project List') }}
@endsection

@section('main_content')
    <div class="breadcrumb-area">
        <div class="container">
            <ul class="breadcrumb">
                <li><i class="fa-solid fa-house-user me-1"></i><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Projects</li>
            </ul>
        </div>
    </div>
    <section class="projects-section py-4">
        <div class="container">
            <h2 class="section-title">My Latest Projects</h2>
            <p class="text-secondary mb-4">A collection of recent work showcasing my skills and experience.</p>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="project-card">
                        <img src="{{ asset('assets/images/no-img.jpg') }}" alt="">
                        <div class="project-content">
                            <h5>Pharmacy POS System</h5>
                            <p class="text-secondary small">
                                Complete inventory & sales management system with reporting features.
                            </p>
                            <div class="tech-stack">
                                <span>Laravel</span>
                                <span>Vue.js</span>
                                <span>MySQL</span>
                            </div>
                            <div class="project-footer d-flex justify-content-between mt-3">
                                <small>Backend Developer</small>
                                <a href="{{ url('/project-details') }}">Explore<i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="project-card">
                        <img src="{{ asset('assets/images/no-img.jpg') }}" alt="">
                        <div class="project-content">
                            <h5>Pharmacy POS System</h5>
                            <p class="text-secondary small">
                                Complete inventory & sales management system with reporting features.
                            </p>
                            <div class="tech-stack">
                                <span>Laravel</span>
                                <span>Vue.js</span>
                                <span>MySQL</span>
                            </div>
                            <div class="project-footer d-flex justify-content-between mt-3">
                                <small>Backend Developer</small>
                                <a href="{{ url('/project-details') }}">Explore<i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="project-card">
                        <img src="{{ asset('assets/images/no-img.jpg') }}" alt="">
                        <div class="project-content">
                            <h5>Pharmacy POS System</h5>
                            <p class="text-secondary small">
                                Complete inventory & sales management system with reporting features.
                            </p>
                            <div class="tech-stack">
                                <span>Laravel</span>
                                <span>Vue.js</span>
                                <span>MySQL</span>
                            </div>
                            <div class="project-footer d-flex justify-content-between mt-3">
                                <small>Backend Developer</small>
                                <a href="{{ url('/project-details') }}">Explore<i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="project-card">
                        <img src="{{ asset('assets/images/no-img.jpg') }}" alt="">
                        <div class="project-content">
                            <h5>Pharmacy POS System</h5>
                            <p class="text-secondary small">
                                Complete inventory & sales management system with reporting features.
                            </p>
                            <div class="tech-stack">
                                <span>Laravel</span>
                                <span>Vue.js</span>
                                <span>MySQL</span>
                            </div>
                            <div class="project-footer d-flex justify-content-between mt-3">
                                <small>Backend Developer</small>
                                <a href="{{ url('/project-details') }}">Explore<i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="project-card">
                        <img src="{{ asset('assets/images/no-img.jpg') }}" alt="">
                        <div class="project-content">
                            <h5>School Management System</h5>
                            <p class="text-secondary small">
                                Multi-role school system with attendance, exam & result modules.
                            </p>
                            <div class="tech-stack">
                                <span>Laravel</span>
                                <span>Bootstrap</span>
                                <span>MySQL</span>
                            </div>
                            <div class="project-footer d-flex justify-content-between mt-3">
                                <small>Full Stack Developer</small>
                                <a href="#">Explore<i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="project-card">
                        <img src="{{ asset('assets/images/no-img.jpg') }}" alt="">
                        <div class="project-content">
                            <h5>E-commerce Platform</h5>
                            <p class="text-secondary small">
                                Online store with cart, payment integration and admin dashboard.
                            </p>
                            <div class="tech-stack">
                                <span>PHP</span>
                                <span>Laravel</span>
                                <span>Stripe</span>
                            </div>
                            <div class="project-footer d-flex align-items-center justify-content-between mt-3">
                                <small>Backend Developer</small>
                                <a href="#">Explore<i class="fa-solid fa-angle-right"></i></a>
                            </div>
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
