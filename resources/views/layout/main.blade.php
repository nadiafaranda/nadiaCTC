<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/styles.css')}}"> 
    </head>
        <body class="home-page">
            @include('layout.header')
            <main class="main-content">
            @yield('content')
            </main>
        <script>
            const navToggle = document.getElementById('nav-toggle');
        const navLinks = document.querySelector('.nav-links');

        navToggle.addEventListener('click', () => {
            navLinks.classList.toggle('show');
        });
    </script>
    </body>
    <footer>@include('layout.footer')
    </footer>
</html>
