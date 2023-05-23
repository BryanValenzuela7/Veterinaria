<!doctype html>
<html lang="en">
<head>
    <head>

        <!-- Additional CSS Files -->
        @vite(['resources/js/app.js', 'resources/css/app.scss'])
        <link rel="stylesheet" type="text/css" href="{{ asset ('css/bootstrap.min.css')}}">

        <link rel="stylesheet" type="text/css" href="{{ asset ('css/font-awesome.css')}}">

        <link rel="stylesheet" href="{{ asset ('css/templatemo-breezed.css')}}">

        <link rel="stylesheet" href="{{ asset ('css/owl-carousel.css')}}">

        <link rel="stylesheet" href="{{ asset ('css/lightbox.css')}}">

    </head>
</head>
<body>
<a href="/" class="logo">
    El patito
</a>
<div class="container">
    <div class="row" style="margin-top: 45px">
        <div class="col-md-4 col-md-offset-4">
            <h4> Login </h4><hr>
            <form action="{{route('auth.checkk')}}" method="post">
                @if(Session::get('Error'))
                    <div class="alert alert-danger">
                        {{Session::get('Error')}}
                    </div>
                @endif
                @csrf
            <div class="form-group">
                <label> Email </label>
                <input type="text" class="form-control" name="email" placeholder="Ingresa un correo" value="{{ old('email') }}">
                <span class="text-danger">@error('email'){{$message}}@enderror</span>
            </div>
                <div class="form-group">
                    <label> Password </label>
                    <input type="password" class="form-control" name="password" placeholder="Ingrese su password" >
                    <span class="text-danger">@error('password'){{$message}}@enderror</span>
                </div>
                <button type="submit" class="btn btn-block btn-primary">Inicie sesion</button>
                <br>
                <a href="{{route('auth.register')}}"> No tiene cuenta? Cree una!</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
