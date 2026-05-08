@extends('layouts.web.master')

@section('title')
    {{ __('Home') }}
@endsection

@section('main_content')
    <section class="hero-section py-5">
        <div class="container">
            <div class="row d-flex justify-content-centerng align-items-center">
                <div class="col-lg-6">
                    <small class="hero-subtitle fs-6"><i class="fa-solid fa-rocket me-1"></i>Helping a Business Scale Online</small>
                    <h1 class="hero-title mt-1">
                        Hi, I'm <span class="highlight-color">Shihab Uddin.</span> <br> Expert in Web Development.
                    </h1>
                    <p class="hero-text">
                        Build scalable web applications and SaaS solutions using Php & Laravel. <br>
                        Experienced in API development, dynamic UI, and eCommerce systems, with strong expertise in MySQL
                        and PostgreSQL to ensure fast, secure, and high-performance applications.
                    </p>
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#reviewModal" class="btn custom-btn mt-2">
                        <i class="fa-regular fa-star me-1"></i>
                        Leave a Review
                    </a>
                    <p class="hero-rating mt-4">
                        Avg Rating: <i class="fa-regular fa-star"></i> 4.9/5 (<span class="animate-counter">200</span>+
                        Reviews)
                    </p>
                </div>

                <div class="col-lg-6">
                    <div class="hero-hanging-area">
                        <div class="hanging-logo laravel-hanging">
                            <span class="hanging-line"></span>
                            <div class="hanging-box">
                                <img src="{{ asset('assets/images/laravel-logo.png') }}" alt="Laravel">
                            </div>
                        </div>

                        <div class="hanging-logo php-hanging">
                            <span class="hanging-line"></span>
                            <div class="hanging-box">
                                <img src="{{ asset('assets/images/php-logo.png') }}" alt="PHP">
                            </div>
                        </div>
                    </div>
                    <div class="hero-img-area text-center">
                        <img src="{{ asset('assets/images/author.png') }}" class="hero-img" alt="Profile">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-section py-5">
        <div class="container text-center">
            <h2 class="section-title">My Services</h2>
            <div class="owl-carousel services-owl mt-4">

                <div class="item">
                    <div class="service-card">
                        <img src="{{ asset('assets/images/no-img.jpg') }}" alt="Laravel">
                        <h5>Laravel Development</h5>
                        <p class="text-secondary">Secure and scalable backend systems with Laravel.</p>
                    </div>
                </div>

                <div class="item">
                    <div class="service-card">
                        <img src="{{ asset('assets/images/no-img.jpg') }}" alt="Bootstrap">
                        <h5>Bootstrap UI Design</h5>
                        <p class="text-secondary">Responsive and modern UI using Bootstrap 5.</p>
                    </div>
                </div>

                <div class="item">
                    <div class="service-card">
                        <img src="{{ asset('assets/images/no-img.jpg') }}" alt="Tailwind">
                        <h5>Tailwind CSS Design</h5>
                        <p class="text-secondary">Utility-first modern design with Tailwind CSS.</p>
                    </div>
                </div>

                <div class="item">
                    <div class="service-card">
                        <img src="{{ asset('assets/images/no-img.jpg') }}" alt="PHP">
                        <h5>PHP Development</h5>
                        <p class="text-secondary">Powerful server-side development using core PHP & frameworks.</p>
                    </div>
                </div>

                <div class="item">
                    <div class="service-card">
                        <img src="{{ asset('assets/images/no-img.jpg') }}" alt="API">
                        <h5>REST API</h5>
                        <p class="text-secondary">Robust APIs for mobile & web applications.</p>
                    </div>
                </div>

                <div class="item">
                    <div class="service-card">
                        <img src="{{ asset('assets/images/no-img.jpg') }}" alt="JavaScript">
                        <h5>JavaScript Development</h5>
                        <p class="text-secondary">Dynamic frontend interactions using modern JavaScript.</p>
                    </div>
                </div>

                <div class="item">
                    <div class="service-card">
                        <img src="{{ asset('assets/images/no-img.jpg') }}" alt="Ecommerce">
                        <h5>E-commerce</h5>
                        <p class="text-secondary">Complete online store solutions.</p>
                    </div>
                </div>

                <div class="item">
                    <div class="service-card">
                        <img src="{{ asset('assets/images/no-img.jpg') }}" alt="Database">
                        <h5>Database Design</h5>
                        <p class="text-secondary">MySQL & PostgreSQL optimized structure.</p>
                    </div>
                </div>

                <div class="item">
                    <div class="service-card">
                        <img src="{{ asset('assets/images/no-img.jpg') }}" alt="Performance">
                        <h5>Performance Optimization</h5>
                        <p class="text-secondary">Speed optimization for scalable apps.</p>
                    </div>
                </div>

                <div class="item">
                    <div class="service-card">
                        <img src="{{ asset('assets/images/no-img.jpg') }}" alt="SaaS">
                        <h5>SaaS Development</h5>
                        <p class="text-secondary">Modern SaaS applications with scalable architecture.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="projects-section py-5">
        <div class="container text-center">
            <h2 class="section-title">Professional Projects</h2>
            <div class="row mt-2 g-4">
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
                            <div class="project-footer d-flex justify-content-between align-items-center mt-3">
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
                                <a href="{{ url('/project-details') }}">Explore<i class="fa-solid fa-angle-right"></i></a>
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
                                <a href="{{ url('/project-details') }}">Explore<i class="fa-solid fa-angle-right"></i></a>
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
                                <a href="{{ url('/project-details') }}">Explore<i class="fa-solid fa-angle-right"></i></a>
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
                                <a href="{{ url('/project-details') }}">Explore<i class="fa-solid fa-angle-right"></i></a>
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
                                <a href="{{ url('/project-details') }}">Explore<i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <a href="{{ url('/projects') }}" class="btn custom-btn">
                    All Projects <i class="fa-solid fa-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="skills-section py-5">
        <div class="container">
            <h2 class="section-title text-center">Experience & Skills</h2>
            <div class="row mt-5">
                <div class="col-lg-6 experience-left">
                    <ul class="timeline">
                        <li>
                            <h6>Project Source Code Editing & Optimization</h6>
                            <span>1+ Years of Practical Experience</span>
                        </li>

                        <li>
                            <h6>Corporate Software Development & Maintenance</h6>
                            <span>2+ Years of Industry Experience</span>
                        </li>

                        <li>
                            <h6>Process Development, Automation & Workflow Improvement</h6>
                            <span>3+ Years of Professional Experience</span>
                        </li>

                        <li>
                            <h6>Express Development for Fast & Scalable Solutions</h6>
                            <span>1+ Years of Experience</span>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6 skill-right">
                    <div class="skill">
                        <p>Design <span>75%</span></p>
                        <div class="progress">
                            <div class="progress-bar" style="width:75%"></div>
                        </div>
                    </div>

                    <div class="skill">
                        <p>Database <span>90%</span></p>
                        <div class="progress">
                            <div class="progress-bar" style="width:90%"></div>
                        </div>
                    </div>

                    <div class="skill">
                        <p>Coding <span>85%</span></p>
                        <div class="progress">
                            <div class="progress-bar" style="width:85%"></div>
                        </div>
                    </div>

                    <div class="skill">
                        <p>Skills <span>95%</span></p>
                        <div class="progress">
                            <div class="progress-bar" style="width:95%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-section py-5">
        <div class="container">
            <h2 class="section-title text-center">Frequently Asked Questions</h2>

            <div class="accordion mt-4" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What services do you offer?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            I offer web development services including Laravel, Bootstrap, Tailwind CSS, PHP, REST API,
                            JavaScript, E-commerce solutions, Database design, Performance optimization, and SaaS
                            development.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            What is your experience level?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            I have over 5 years of experience in web development, working on various projects ranging
                            from small business websites to large-scale applications.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            How can I contact you for a project?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            You can contact me through the contact form on this website or email me directly at
                            <a href="mailto:john.doe@example.com">john.doe@example.com</a>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            How can I contact you for a project?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            You can contact me through the contact form on this website or email me directly at
                            <a href="mailto:john.doe@example.com">john.doe@example.com</a>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            How can I contact you for a project?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            You can contact me through the contact form on this website or email me directly at
                            <a href="mailto:john.doe@example.com">john.doe@example.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-section py-5">
        <div class="container text-center">
            <h2 class="section-title">Testimonials</h2>
            <div class="owl-carousel testimonial-owl mt-4">
                @for ($i = 1; $i <= 8; $i++)
                    <div class="item">
                        <div class="testimonial-card">
                            <p class="text-secondary">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, consequuntur?
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae tempore aliquid
                                assumenda labore molestias magni tenetur officia, ullam ipsum aliquam maxime optio?
                            </p>
                            <div class="name-img">
                                <img src="{{ asset('assets/images/default-user.png') }}" alt="Database">
                                <h5>Shihab Uddin Rabbi</h5>
                            </div>
                            <span class="fw-bold mt-5">Topal - <small class="text-secondary">Web Developer</small></span>
                            <div class="star-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <section class="blog-section py-5">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="section-title">My Blogs</h2>
                <a href="{{ url('/blogs') }}" class="btn custom-btn"> View All <i class="fa-solid fa-arrow-right ms-1"></i>
                </a>
            </div>

            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="row g-4">
                        <div class="col-md-6">
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

                        <div class="col-md-6">
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
                </div>

                <div class="col-lg-4">
                    <div class="recent-blog-card">
                        <img src="{{ asset('assets/images/no-img.jpg') }}" alt="recent-blog-img">
                        <div class="recent-content">
                            <span class="date"><i class="fa-regular fa-clock me-1"></i>02 May 2026</span>
                            <h6>Vue JS Basics Guide</h6>
                            <a href="{{ url('/blog-details') }}">Read More<i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>

                    <div class="recent-blog-card">
                        <img src="{{ asset('assets/images/no-img.jpg') }}" alt="recent-blog-img">
                        <div class="recent-content">
                            <span class="date"><i class="fa-regular fa-clock me-1"></i>01 May 2026</span>
                            <h6>AJAX with Laravel</h6>
                            <a href="{{ url('/blog-details') }}">Read More<i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>

                    <div class="recent-blog-card">
                        <img src="{{ asset('assets/images/no-img.jpg') }}" alt="recent-blog-img">
                        <div class="recent-content">
                            <span class="date"><i class="fa-regular fa-clock me-1"></i>30 Apr 2026</span>
                            <h6>Bootstrap UI Tips</h6>
                            <a href="{{ url('/blog-details') }}">Read More<i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('modal')
    @include('web.components.review')
@endpush
