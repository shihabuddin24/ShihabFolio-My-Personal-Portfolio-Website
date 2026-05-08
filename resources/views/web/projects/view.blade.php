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
            <p class="text-secondary fw-bold">
                A complete pharmacy management solution for handling sales, inventory and reports.
            </p>
            <div class="project-banner mt-3">
                <img src="{{ asset('assets/images/no-img.jpg') }}" class="img-fluid">
            </div>
            <div class="row mt-4">
                <div class="col-lg-8">
                    <h5 class="fw-bold">Project Overview</h5>
                    <p class="text-secondary">
                        This system helps pharmacy owners manage their daily sales, track inventory,
                        generate reports and handle customer transactions efficiently.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, aut rerum debitis quia corrupti amet,
                        fugiat dolorum blanditiis nobis placeat consequuntur voluptatibus facere ipsa nulla et ex repellat quis nemo,
                        culpa eligendi sed voluptate reiciendis porro architecto. Accusamus laboriosam nulla explicabo eius, omnis delectus?
                    </p>
                    <h5 class="mt-2 fw-bold">My Contribution</h5>
                    <ul class="ps-0">
                        <li class="text-secondary"><span>1.</span> Developed REST APIs for POS module</li>
                        <li class="text-secondary"><span>2.</span> Implemented inventory management logic</li>
                        <li class="text-secondary"><span>3.</span> Optimized database queries for performance</li>
                        <li class="text-secondary"><span>4.</span> Fixed bugs and improved system stability</li>
                    </ul>
                    <h5 class="mt-2 fw-bold">Key Features</h5>
                    <ul class="ps-0">
                        <li class="text-secondary"><span>1.</span> Sales & invoice management</li>
                        <li class="text-secondary"><span>2.</span> Stock tracking system</li>
                        <li class="text-secondary"><span>3.</span> Report generation</li>
                        <li class="text-secondary"><span>4.</span> Multi-user access</li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <div class="project-info-box my-2">
                        <h6 class="fw-bold">Project Info</h6>
                        <p class="mb-2"><strong>Role: </strong>Backend Developer</p>
                        <p class="mb-2"><strong>Tech Stack:</strong>
                            <div class="tech-stack mt-0">
                                <span>Laravel</span>
                                <span>Vue.js</span>
                                <span>MySQL</span>
                            </div>
                        </p>
                        <p class="mb-2"><strong>Type: </strong>Web Application</p>
                        <div>
                            <small class="text-secnondary">
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
