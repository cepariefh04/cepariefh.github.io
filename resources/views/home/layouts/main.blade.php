<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('meta')

        <title>Cepariefh</title>
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        {{-- <link href="{{ asset('css/fontawesome/css/all.min.css') }}" rel="stylesheet" type="text/css"> --}}
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
          href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
          rel="stylesheet"
        />
        <link href="https://fonts.googleapis.com/css2?family=Croissant+One&family=Poppins:wght@300&display=swap" rel="stylesheet">
        @yield('link')
        @yield('style')
    </head>
    <body>
        <div id="app">
          @include('home.layouts.navbar')
          @yield('content')
        </div>
        @include('home.layouts.footer')
        <script src="{{ asset('/js/app.js') }}"></script>
        <script src="https://unpkg.com/feather-icons"></script>
        <script>
          const menuToggle = document.querySelector('.menu-toggle input');
          const nav = document.querySelector('nav ul');

          menuToggle.addEventListener('click', function() {
              nav.classList.toggle('slide');
          });

          document.getElementById("year").innerHTML = new Date().getFullYear();
        </script>
        <script>
          feather.replace();
        </script>
        @yield('script')
    </body>
</html>