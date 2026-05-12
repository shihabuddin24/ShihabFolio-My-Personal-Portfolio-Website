<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@hasSection('title') @yield('title') | @endif {{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ asset('assets/plugins/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/errors/style.css') }}">
</head>
<body>
    @yield('main_content')

    <script src="{{ asset('assets/plugins/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
