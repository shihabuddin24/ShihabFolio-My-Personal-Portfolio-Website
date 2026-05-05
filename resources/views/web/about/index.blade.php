@extends('layouts.web.master')

@section('title')
    {{ __('About') }}
@endsection

@section('main_content')
    <div class="breadcrumb-area">
        <div class="container">
            <ul class="breadcrumb">
                <li><i class="fa-solid fa-house-user me-1"></i><a href="{{ url('/') }}">Home</a></li>
                <li class="active">About</li>
            </ul>
        </div>
    </div>
    <section class="about-section py-5">
        <div class="container">
            <div class="about-content">
                <div class="row align-items-stretch">
                    <div class="col-lg-6 d-flex">
                        <div class="left-side w-100">
                            <img class="about-img img-fluid rounded-2 h-100 w-100 object-fit-cover" src="{{ asset('assets/images/about-img.png') }}" alt="about-img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-side">
                            <h4 class="highlight-color mt-3 mt-lg-1">About Me</h4>
                            <h2 class="section-title">Passionate About <span class="highlight-color">Code.</span></h2>
                            <h2 class="section-title">Committed to <span class="highlight-color">Quality.</span></h2>
                            <p class="text-secondary mb-2">
                                Turning ideas into scalable digital solutions — that's what I do best. From backend
                                architecture to user-focused design, I build web applications that are fast, secure, and
                                ready for growth.
                            </p>
                            <div class="note d-flex flex-column">
                                <span class="p-1"><i class="fa-regular fa-circle-check highlight-color me-1"></i>Clean & Maintainable Code.</span>
                                <span class="p-1"><i class="fa-regular fa-circle-check highlight-color me-1"></i>Scalable & Secure Applications.</span>
                                <span class="p-1"><i class="fa-regular fa-circle-check highlight-color me-1"></i>On Time Delivery.</span>
                                <span class="p-1"><i class="fa-regular fa-circle-check highlight-color me-1"></i>Client Satisfaction is my Priority,</span>
                                <span class="p-1"><i class="fa-regular fa-circle-check highlight-color me-1"></i>Optimized & High-Performance Solutions.</span>
                                <span class="p-1"><i class="fa-regular fa-circle-check highlight-color me-1"></i>Responsive & User-Friendly Design.</span>
                                <span class="p-1"><i class="fa-regular fa-circle-check highlight-color me-1"></i>Reliable & Scalable Architecture.</span>
                                <span class="p-1"><i class="fa-regular fa-circle-check highlight-color me-1"></i>Continuous Learning & Improvement.</span>
                                <span class="p-1"><i class="fa-regular fa-circle-check highlight-color me-1"></i>API Driven Development Approach.</span>
                                <span class="p-1"><i class="fa-regular fa-circle-check highlight-color me-1"></i>Modern Tools & Best Practices.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-desc mt-4">
                    <h5 class="fw-bold"><i class="fa-solid fa-code me-1"></i>Code with Purpose, Build with Passion.</h5>
                    <p class="text-secondary">
                        I'm a passionate Full Stack Web Developer with a strong focus on building scalable, secure, and
                        high-performance web applications. I specialize in PHP and Laravel, creating powerful backend
                        systems along with dynamic and responsive user interfaces.

                        With hands-on experience in API development, eCommerce platforms, and SaaS solutions, I help
                        businesses transform their ideas into real-world digital products. I also have strong expertise in
                        database design using MySQL and PostgreSQL, ensuring optimized performance and data integrity.

                        I believe in writing clean, maintainable code and delivering solutions that are not only functional
                        but also efficient and future-proof. My goal is to provide value-driven development that helps
                        businesses grow and succeed in the digital world.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
