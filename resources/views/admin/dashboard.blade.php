@extends('layout.admin')
<head>

    <!-- Additional CSS Files -->
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset ('css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{ asset ('css/templatemo-breezed.css')}}">

    <link rel="stylesheet" href="{{ asset ('css/owl-carousel.css')}}">

    <link rel="stylesheet" href="{{ asset ('css/lightbox.css')}}">

</head>

<!-- ***** Main Banner Area Start ***** -->
<div class="Modern-Slider">
    <!-- Item -->
    <div class="item">
        <div class="img-fill">
            <img src="{{asset('images/gato1.jpg')}}" alt="">
            <div class="text-content bg-dark bg-opacity-50">
                <h3 class="text-white">Bienvenido a la veterinaria el GATO :{{$LoggedUserInfo['name']}}</h3>
                <h5 class="text-white">has ingresado con el correo: {{$LoggedUserInfo['email']}}</h5>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->
@yield('content')

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xs-12">
                <div class="left-text-content">
                    <p>Copyright &copy; 2020 Breezed Co., Ltd.

                        - Design: <a rel="nofollow noopener" href="https://templatemo.com">TemplateMo</a></p>
                </div>
            </div>
            <div class="col-lg-6 col-xs-12">
                <div class="right-text-content">
                    <ul class="social-icons">
                        <li><p>Follow Us</p></li>
                        <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-facebook"></i></a></li>
                        <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-twitter"></i></a></li>
                        <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-linkedin"></i></a></li>
                        <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

