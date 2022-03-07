<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/icons/favicon.ico') }}" type="image/ico">
    <title>Mel Pet Online - Sua Loja de Acessorios @yield('title')</title>
    
    <!--TAILWINDCSS-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
 
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @yield('css')
    @yield('js')

</head>

<body class="bg-warmGray-100 text-pink-600 work-sans leading-normal text-base tracking-normal">
    {{-- NAV --}}
    @include('layout.nav')
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-3">
        @yield('content')
    </div>
    {{-- FOOTER --}}
    @include('layout.footer')
</body>

</html>