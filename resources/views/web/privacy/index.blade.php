@extends('layouts.web.master')

@section('title')
    {{ __('Privacy') }}
@endsection

@section('main_content')
    <div class="breadcrumb-area">
        <div class="container">
            <ul class="breadcrumb">
                <li><i class="fa-solid fa-house-user me-1"></i><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Privacy</li>
            </ul>
        </div>
    </div>
    <section class="privacy-section py-5">
        <div class="container">
            <h2 class="section-title">Privacy Policy</h2>
            <p class="text-secondary">
                Encrypted mihi islam assaovailable. Lorem ipsum dolor sit amet consectetur <br>
                and raveri iremen fonttrast.

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio deserunt impedit tenetur debitis obcaecati itaque mollitia nemo ad sapiente quaerat rem veniam repudiandae eaque, quam assumenda fuga quod adipisci tempore, accusantium corrupti totam. Tempore!

                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui dolorem quas quisquam omnis incidunt? Iure tenetur beatae quaerat dolorum delectus dignissimos, ullam alias natus numquam placeat et itaque sequi nulla velit recusandae. Consequuntur placeat, deleniti eveniet iusto rerum perspiciatis itaque quod aperiam ab provident porro molestiae voluptatum numquam totam sequi!
            </p>
        </div>
    </section>
@endsection
