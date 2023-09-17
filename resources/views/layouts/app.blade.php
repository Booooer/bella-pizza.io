<!DOCTYPE html>
<html lang="en">
<head>
    {{-- мета теги + сео --}}
    @include('layouts.meta')
    <link rel="shortcut icon" href="{{asset('storage/public/favicon.png')}}" type="image/png">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')  }}">
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="{{ asset('css/styles.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/media.css')  }}">
    {{--  yandex метрика  --}}
    @include('layouts.metrica')
</head>
<body>
    @include('layouts.blur_overlay')
    @include('layouts.preloader')
    <header>
        @include('layouts.header')
    </header>
    <main>
        @yield('content')
    </main>
    @include('layouts.popups')
    <script src="{{ asset('js/jQuery.js') }}"></script>
    <script src="{{ asset('js/jquery.lettering.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
