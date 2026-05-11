<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@hasSection('title') @yield('title') | @endif {{ config('app.name') }}</title>

    @include('layouts.auth.components.css')
</head>
<body>
    @yield('main_content')

    @stack('modal')

    @include('layouts.web.components.script')
</body>
</html>
