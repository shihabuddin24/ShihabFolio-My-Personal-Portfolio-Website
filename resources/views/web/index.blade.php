@extends('layouts.web.master')

@section('title')
    {{ __('Home') }}
@endsection

@section('main_content')
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <small class="hero-subtitle fs-6 fw-bold">heei</small>
                <h1 class="hero-title">
                    Welcome to the <br> PHP Developer
                </h1>
                <p class="hero-text">
                    Build modern and scalable web applications with Laravel & Vue.js
                </p>

                <a href="#" class="btn custom-btn mt-3">Leave a Review</a>
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

        <div class="row mt-4">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card">
                    <h5>Backend</h5>
                    <p>Building secure and scalable backend systems with Laravel.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card">
                    <h5>Full Stack</h5>
                    <p>Complete web solutions using modern technologies.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card">
                    <h5>API</h5>
                    <p>Robust REST API development for mobile & web apps.</p>
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

            <div class="col-lg-6">
                <ul class="timeline">
                    <li>
                        <h6>Project Source Editing</h6>
                        <span>1+ Years Experience</span>
                    </li>
                    <li>
                        <h6>Corporate Development</h6>
                        <span>2+ Years Experience</span>
                    </li>
                    <li>
                        <h6>Process Development</h6>
                        <span>3+ Years Experience</span>
                    </li>
                    <li>
                        <h6>Express Development</h6>
                        <span>1+ Years Experience</span>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6">
                <div class="skill">
                    <p>Design</p>
                    <div class="progress">
                        <div class="progress-bar" style="width:75%"></div>
                    </div>
                </div>

                <div class="skill">
                    <p>Database</p>
                    <div class="progress">
                        <div class="progress-bar" style="width:90%"></div>
                    </div>
                </div>

                <div class="skill">
                    <p>Coding</p>
                    <div class="progress">
                        <div class="progress-bar" style="width:85%"></div>
                    </div>
                </div>

                <div class="skill">
                    <p>Skills</p>
                    <div class="progress">
                        <div class="progress-bar" style="width:95%"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="testimonial-section py-5">
    <div class="container text-center">
        <h2 class="section-title">Testimonials</h2>

        <div class="row mt-4">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="testimonial-card">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <h6>John Doe</h6>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="testimonial-card">
                    <p>Great developer! Highly recommended for web projects.</p>
                    <h6>Alex Smith</h6>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="testimonial-card">
                    <p>Very professional and skilled Laravel developer.</p>
                    <h6>Sarah Lee</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-section py-5">
    <div class="container">
        <div class="row contact-wrapper">

            <!-- Left -->
            <div class="col-lg-6 col-md-12 contact-left">
                <h2 class="section-title">CONTACT ME</h2>
                <p>
                    Encrypted mihi islam assaovailable <br>
                    and raveri iremen fonttrast
                </p>

                <div class="map">
                    <iframe src="https://www.google.com/maps?q=23.7576,90.3893&z=15&output=embed" width="100%" height="180" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 contact-right">
                <form action="" class="" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-floating mb-3 col-12">
                            <input type="text" name="name" class="form-control" placeholder="Enter name" id="name">
                            <label class="ms-2" for="name">{{ __('Full Name') }}</label>
                        </div>
                        <div class="form-floating mb-3 col-12">
                            <input type="email" class="form-control" placeholder="name@example.com" id="email">
                            <label class="ms-2" for="email">{{ __('Email Address') }}</label>
                        </div>
                        <div class="form-floating mb-3 col-12">
                            <input type="text" name="subject" class="form-control" placeholder="Enter subject" id="subject">
                            <label class="ms-2" for="subject">{{ __('Subject') }}</label>
                        </div>
                        <div class="form-floating mb-3 col-12">
                            <textarea name="message" class="form-control" placeholder="Write your message" id="message"></textarea>
                            <label class="ms-2" for="message">{{ __('Write Message') }}</label>
                        </div>
                    </div>
                    <button class="btn custom-btn" type="submit">Send Message</button>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection
