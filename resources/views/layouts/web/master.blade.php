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
</head>
<body>
    <div class="row">
        <div class="container-fluid">
            @yield('main_content')
        </div>
    </div>
</body>
</html>
