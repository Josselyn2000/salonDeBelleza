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

        <!--Stylesheet -->
        <link href="css/calendarorganizer.css" rel="stylesheet">
        <link href="css/dashboard.css" rel="stylesheet" />
        <title>J&E | @yield('title')</title>
    </head>
    <body>
        @include('partials.sidebar')
        
        @yield('content')

        <!-- dashoard Javascript -->
        <script>
            function openNav() {
                document.getElementById("mySidebar").style.width = "250px";
                document.getElementById("main").style.marginLeft = "250px";
            }

            function closeNav() {
                document.getElementById("mySidebar").style.width = "0";
                document.getElementById("main").style.marginLeft = "0";
            }

        </script>
        <script src="js/calendarorganizer.min.js"></script>
        <script src="https://cdn.rawgit.com/nizarmah/calendar-javascript-lib/master/calendarorganizer.min.js"></script>
		<script src="/js/calendar.js"></script>
    </body>
</html>