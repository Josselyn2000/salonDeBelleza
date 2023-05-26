<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <!-- Favicon -->
        <link href="favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="./css/owl.carousel.css" rel="stylesheet">

        <!-- My Stylesheet -->
        <link href="./css/bootstrap.css" rel="stylesheet">
        <link href="./css/mystyles.css" rel="stylesheet">
        <title>J&E | @yield('title')</title>
    </head>
    <body>
        <!-- Topbar Start -->
        @include('partials.topbar')
        <!-- Topbar End -->

        @yield('content')

        <!-- Footer Start -->
        @include('partials.footer')
        <!-- Footer End -->

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!--<script src="js/easing.min.js"></script>-->
        <script src="js/waypoints.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>