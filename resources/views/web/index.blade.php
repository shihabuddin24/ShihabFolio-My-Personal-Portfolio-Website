@extends('layouts.web.master')

@section('title')
    {{ __('Home') }}
@endsection

@section('main_content')
    <section class="hero-section py-5">
        <div class="container">
            <div class="row d-flex justify-content-centerng align-items-center">
                <div class="col-lg-6">
                    <small class="hero-subtitle fs-6 text-dark text-secondary">Helping Businesses Scale Online</small>
                    <h1 class="hero-title mt-1">
                        Hi, I'm <span class="highlight-color">Shihab Uddin.</span> <br> Expert in Web Development.
                    </h1>
                    <p class="hero-text">
                        Build scalable web applications and SaaS solutions using Php & Laravel. <br>
                        Experienced in API development, dynamic UI, and eCommerce systems, with strong expertise in MySQL
                        and PostgreSQL to ensure fast, secure, and high-performance applications.
                    </p>
                    <a href="#" class="btn custom-btn mt-2"><i class="fa-regular fa-star me-1"></i>Leave a Review</a>
                    <p class="hero-rating mt-4">
                        Avg Rating: <i class="fa-regular fa-star"></i> 4.9/5 (<span class="animate-counter">200</span>+
                        Reviews)
                    </p>
                </div>

                <div class="col-lg-6 text-center hero-img-area">
                    <img src="{{ asset('assets/images/author.png') }}" class="hero-img" alt="Profile">
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
            <h2 class="section-title">Featured Projects</h2>

            <div class="row mt-4 g-3">
                <div class="col-lg-4 col-md-6">
                    <div class="project-box p1"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-box p2"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-box p3"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-box p4"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-box p5"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-box p6"></div>
                </div>
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

    <section class="contact-section py-5">
        <div class="container">
            <div class="row contact-wrapper">
                <div class="col-lg-6 col-md-12 contact-left">
                    <h2 class="section-title ms-2">CONTACT ME</h2>
                    <p class="text-secondary ms-2">
                        Encrypted mihi islam assaovailable. Lorem ipsum dolor sit amet consectetur <br>
                        and raveri iremen fonttrast.
                    </p>
                    <div class="map">
                        <iframe src="https://www.google.com/maps?q=23.7576,90.3893&z=15&output=embed" width="100%"
                            height="180" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 mt-4 mt-lg-0 contact-right">
                    <form action="" class="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-floating mb-3 col-12">
                                <input type="text" name="name" class="form-control" placeholder="Enter name"
                                    id="name">
                                <label class="ms-2" for="name">{{ __('Full Name') }}</label>
                            </div>
                            <div class="form-floating mb-3 col-12">
                                <input type="email" class="form-control" placeholder="name@example.com"
                                    id="email">
                                <label class="ms-2" for="email">{{ __('Email Address') }}</label>
                            </div>
                            <div class="form-floating mb-3 col-12">
                                <input type="text" name="subject" class="form-control" placeholder="Enter subject"
                                    id="subject">
                                <label class="ms-2" for="subject">{{ __('Subject') }}</label>
                            </div>
                            <div class="form-floating mb-3 col-12">
                                <textarea name="message" class="form-control" placeholder="Write your message" id="message"></textarea>
                                <label class="ms-2" for="message">{{ __('Write Message') }}</label>
                            </div>
                        </div>
                        <button class="btn custom-btn" type="submit"><i class="fa-solid fa-location-arrow me-1"></i>Send
                            Message</button>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
