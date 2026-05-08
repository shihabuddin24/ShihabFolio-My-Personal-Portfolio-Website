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

    <section class="blog-details py-4">
        <div class="container">
            <div class="blog-banner">
                <img src="{{ asset('assets/images/no-img.jpg') }}" class="img-fluid">
            </div>
            <div class="row mt-4">
                <div class="col-lg-8">
                    {{-- <h2 class="section-title">Full Stack Development</h2> --}}
                    <div class="blog-detail-content">
                        <div class="d-flex">
                            <div class="user-img">
                                <img src="{{ asset('assets/images/author.png') }}" alt="user-img">
                            </div>
                            <div class="d-flex flex-column ms-2">
                                <span class="user-name fw-bold">Shihab Uddin</span>
                                <small class="date"><i class="fa-regular fa-clock me-1"></i>03 May 2026</small>
                            </div>
                        </div>
                        <h2 class="section-title mt-2">Full Stack Development</h2>
                        <p class="desc text-secondary mt-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam ipsam error molestiae nulla id, explicabo soluta,
                            quae quasi, distinctio porro exercitationem tempore necessitatibus alias suscipit deleniti eius provident officiis.
                            Ratione soluta, tempora eaque voluptates expedita adipisci autem recusandae sunt fugit facilis nulla delectus incidunt numquam,
                            error alias totam unde minima. Atque minima non, ducimus eligendi voluptas eos quis itaque adipisci ad,
                            quo enim consectetur blanditiis, voluptates aliquid? Repudiandae laboriosam ea delectus numquam rem! Porro rem placeat aliquam ex non consectetur animi?
                            Dolores, aperiam. Magni ullam ut minima esse, consectetur atque accusamus ex quidem nobis. Dolores laudantium, omnis accusantium a libero ex tenetur blanditiis,
                            magnam temporibus illum saepe quae recusandae nulla repellendus aspernatur alias fuga laboriosam commodi doloribus velit? Et nostrum cupiditate neque saepe.
                        </p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur animi, odit pariatur voluptatem ullam minima reprehenderit dolorum incidunt autem! Velit,
                            esse aperiam, beatae quas quae impedit cumque debitis culpa nam ipsum praesentium facere.
                            Quaerat eligendi sed placeat harum assumenda optio iusto voluptatibus quos nostrum aut!
                        </p>
                        <p class="tags"><strong>Tags:</strong>
                            <span>hi</span>
                            <span>hello</span>
                            <span>php</span>
                            <span>js</span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h5 class="fw-bold mb-3">Recent Blogs</h5>
                    <div class="recent-blogs">
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
        </div>
    </section>
@endsection
