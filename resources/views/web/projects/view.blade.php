@extends('layouts.web.master')

@section('title')
    {{ __('Project Details') }}
@endsection

@section('main_content')
    <div class="breadcrumb-area">
        <div class="container">
            <ul class="breadcrumb">
                <li><i class="fa-solid fa-house-user me-1"></i><a href="{{ url('/') }}">Home</a></li>
                <li><a href="#">Projects</a></li>
                <li class="active">Project Details</li>
            </ul>
        </div>
    </div>

    <section class="project-details py-4">
        <div class="container">
            <h2 class="section-title">Pharmacy POS System</h2>
            <p class="text-muted">
                A complete pharmacy management solution for handling sales, inventory and reports.
            </p>
            <div class="project-banner mt-3">
                <img src="{{ asset('assets/images/no-img.jpg') }}" class="w-100 rounded">
            </div>
            <div class="row mt-5">
                <div class="col-lg-8">
                    <h5>Project Overview</h5>
                    <p>
                        This system helps pharmacy owners manage their daily sales, track inventory,
                        generate reports and handle customer transactions efficiently.
                    </p>
                    <h5 class="mt-4">My Contribution</h5>
                    <ul>
                        <li>Developed REST APIs for POS module</li>
                        <li>Implemented inventory management logic</li>
                        <li>Optimized database queries for performance</li>
                        <li>Fixed bugs and improved system stability</li>
                    </ul>
                    <h5 class="mt-4">Key Features</h5>
                    <ul>
                        <li>Sales & invoice management</li>
                        <li>Stock tracking system</li>
                        <li>Report generation</li>
                        <li>Multi-user access</li>
                    </ul>

                </div>

                <!-- RIGHT -->
                <div class="col-lg-4">

                    <div class="project-info-box">
                        <h6>Project Info</h6>

                        <p><strong>Role:</strong> Backend Developer</p>

                        <p><strong>Tech Stack:</strong></p>
                        <div class="tech-stack">
                            <span>Laravel</span>
                            <span>Vue.js</span>
                            <span>MySQL</span>
                        </div>

                        <p class="mt-3"><strong>Type:</strong> Web Application</p>

                        <div class="mt-3">
                            <small class="text-muted">
                                This project was developed as part of my role in a company.
                                Source code is not publicly available.
                            </small>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>
@endsection
