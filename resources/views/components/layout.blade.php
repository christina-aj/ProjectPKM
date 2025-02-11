<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>{{ $title }}</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{!! URL::asset('lib/lightbox/css/lightbox.min.css')!!}" rel="stylesheet">
        <link href="{!! URL::asset('lib/owlcarousel/assets/owl.carousel.min.css')!!}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        {{-- <link href="css/bootstrap.min.css" rel="stylesheet"> --}}
        <link rel="stylesheet" href="{!! URL::asset('css/bootstrap.min.css') !!}">

        <!-- Template Stylesheet -->
        <link href="{!! URL::asset('css/style.css')!!}" rel="stylesheet">
    </head>
    <body class="{{ request()->is('shop-detail') || ('user')  ? 'shop-detail' : '' }}">
        <x-navbar></x-navbar>
        <main>
            {{ $slot }}
        </main>
        <!-- JavaScript Libraries -->
        <script src="{!! URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js')!!}"></script>
        <script src="{!! URL::asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js')!!}"></script>
        <script src="{!! URL::asset('lib/easing/easing.min.js')!!}"></script>
        <script src="{!! URL::asset('lib/waypoints/waypoints.min.js')!!}"></script>
        <script src="{!! URL::asset('lib/lightbox/js/lightbox.min.js')!!}"></script>
        <script src="{!! URL::asset('lib/owlcarousel/owl.carousel.min.js')!!}"></script>

        <!-- Template Javascript -->
        <script src="{!! URL::asset('js/main.js')!!}"></script>
        <script src="{!! URL::asset('js/nominalbutton.js')!!}"></script>
        <x-footer></x-footer>
    </body>
</html>
    

