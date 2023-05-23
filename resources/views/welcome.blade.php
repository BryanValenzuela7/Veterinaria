@extends('layout.plantilla')
@section('content')
<head>

    <!-- Additional CSS Files -->
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset ('css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{ asset ('css/templatemo-breezed.css')}}">

    <link rel="stylesheet" href="{{ asset ('css/owl-carousel.css')}}">

    <link rel="stylesheet" href="{{ asset ('css/lightbox.css')}}">

</head>

<body>

<!-- ***** Header Area Start ***** -->

<!-- ***** Header Area End ***** -->

<!-- ***** Search Area ***** -->
<div id="search">
    <button type="button" class="close">×</button>
    <form id="contact" action="#" method="get">
        <fieldset>
            <input type="search" name="q" placeholder="SEARCH KEYWORD(s)" aria-label="Search through site content">
        </fieldset>
        <fieldset>
            <button type="submit" class="main-button">Search</button>
        </fieldset>
    </form>
</div>

<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner header-text" id="top">
    <div class="Modern-Slider">
        <!-- Item -->
        <div class="item">
            <div class="img-fill">
                <img src="{{asset('images/pato01.jpg')}}" alt="">
                <div class="text-content bg-dark bg-opacity-50">
                    <h3 class="text-white">Bienvenido a la veterinaria el patito</h3>
                    <h5 class="text-white">Cuidado a tu mascota</h5>
                </div>
            </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <div class="item">
            <div class="img-fill">
                <img src="{{ asset('images/pato02.jpg') }}" alt="">
                <div class="text-content bg-dark bg-opacity-50">
                    <h3 class="text-white">Bienvenido a la veterinaria el patito</h3>
                    <h5 class="text-white">Cuidamos a tu mascota</h5>
                </div>
            </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <!-- // Item -->
    </div>
</div>
@endsection
<!-- ***** Main Banner Area End ***** -->





<!-- ***** Footer Start ***** -->



<!-- jQuery -->
<script src="{{ asset ('assets/js/jquery-2.1.0.min.js')}}"></script>

<!-- Bootstrap -->
<script src="{{ asset ('assets/js/popper.js')}}"></script>
<script src="{{ asset ('assets/js/bootstrap.min.js')}}"></script>

<!-- Plugins -->
<script src="{{ asset ('assets/js/owl-carousel.js')}}"></script>
<script src="{{ asset ('assets/js/scrollreveal.min.js')}}"></script>
<script src="{{ asset ('assets/js/waypoints.min.js')}}"></script>
<script src="{{ asset ('assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{ asset ('assets/js/imgfix.min.js')}}"></script>
<script src="{{ asset ('assets/js/slick.js')}}"></script>
<script src="{{ asset ('assets/js/lightbox.js')}}"></script>
<script src="{{ asset ('assets/js/isotope.js')}}"></script>

<!-- Global Init -->
<script src="{{ asset ('assets/js/custom.js')}}"></script>

<script>

    $(function() {
        var selectedClass = "";
        $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
                $("."+selectedClass).fadeIn();
                $("#portfolio").fadeTo(50, 1);
            }, 500);

        });
    });

</script>

</body>
</html>
