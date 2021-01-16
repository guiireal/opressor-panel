<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="{{ mix('css/bundle.min.css') }}" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="wrapper">
            <x-menu :username="Auth::user()->name" :backgroundImage="asset('images/sidebar-5.jpg')"/>
            <div class="main-panel">
                <x-topbar />
                @yield('content')
            </div>
        </div>
    </div>
    <script src="{{mix('js/bundle.min.js')}}"></script>
    <script src="{{mix('js/app.js')}}"></script>
</body>
</html>