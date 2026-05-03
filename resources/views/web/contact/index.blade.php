@extends('layouts.web.master')

@section('title')
    {{ __('Blog List') }}
@endsection

@section('main_content')
    <div class="breadcrumb-area">
        <div class="container">
            <ul class="breadcrumb">
                <li><i class="fa-solid fa-house-user me-1"></i><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Contact</li>
            </ul>
        </div>
    </div>
    <section class="contact-section py-5">
        <div class="container">
            <div class="row contact-wrapper">
                <div class="col-lg-6 col-md-12 contact-left">
                    <h2 class="section-title">CONTACT ME</h2>
                    <p class="text-secondary">
                        Encrypted mihi islam assaovailable. Lorem ipsum dolor sit amet consectetur <br>
                        and raveri iremen fonttrast.
                    </p>
                    <div class="map">
                        <iframe src="https://www.google.com/maps?q=23.7576,90.3893&z=15&output=embed" width="100%"
                            height="184" style="border:0;" allowfullscreen="" loading="lazy">
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
