<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@hasSection('title') @yield('title') | @endif {{ config('app.name') }}</title>

    {{-- Just for seo --}}
    <meta name="description" content="Professional Laravel Developer Portfolio of Shihab Uddin. Showcasing web development projects, skills, and experience in PHP, Laravel, Vue.js, and React.">
    <meta name="keywords" content="Laravel Developer, PHP Developer, Web Developer Bangladesh, Portfolio, Shihab Uddin, Vue.js, React">
    <meta name="author" content="Shihab Uddin">

    @include('layouts.web.components.css')
</head>
<body>
    @include('layouts.web.components.header')

    @yield('main_content')

    @include('layouts.web.components.footer')

    @stack('modal')

    @include('layouts.web.components.script')
</body>
</html>
