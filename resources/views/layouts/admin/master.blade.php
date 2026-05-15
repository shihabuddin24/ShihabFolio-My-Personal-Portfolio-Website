<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@hasSection('title') @yield('title') | @endif {{ config('app.name') }}</title>
    @include('layouts.admin.components.css')
</head>
<body>
    @include('layouts.admin.components.header')

    @include('layouts.admin.components.side-bar')

    <main class="main-content" id="mainContent">

        <div class="content-box">
            @yield('main_content')
        </div>

        @include('layouts.admin.components.footer')

        @stack('modal')

    </main>

    @include('layouts.admin.components.script')
</body>
</html>
