<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="favicon.ico">
    <title> @yield('title')</title>

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="css/bootstrap4.6/bootstrap.min.css">
    <link rel="stylesheet"
        href="{{ asset('css/css/styles-home-css.css?vs=') . filemtime('css/css/styles-home-css.css') }}">
    <link href="css/fontawesome/solid.css" rel="stylesheet">
    <link href="css/fontawesome/all.css" rel="stylesheet">

    <script src="js/jquery/jquery-3.6.1.min.js"></script>
    {{-- <link href="css/fontawesome/all.min.css" rel="stylesheet"> --}}


</head>

<body>






    {{-- @include('/views.inicio') --}}



    <section id="content-wrapper" class="d-flex toggled">
        <!-- sidebar-->
        @include('layout.sidebar')         
        <!-- fin sidebar-->

        <!-- layout content-->
        @include('layout.layout-content')
        
        <!-- fin layout content-->
    </section>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> --}}

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script> --}}

    <script src="js/bootstrap4.6/jquery.slim.min.js"></script>
    <script src="js/bootstrap4.6/popper.min.js"></script>
    <script src="js/bootstrap4.6/bootstrap.min.js"></script>
    <script src="js/sweetalert2/sweetalert2.js"></script>
    <script src="{{ asset('js/app/script-home-layout.js?lastV1=1.0') }}"></script>
    @yield('scripts')

</body>

</html>
