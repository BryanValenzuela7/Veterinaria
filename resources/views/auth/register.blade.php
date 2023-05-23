<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
<div class="container">
    <div class="row" style="margin-top: 45px">
        <div class="col-md-4 col-md-offset-4">
            <h4> Register </h4><hr>
            <form action="{{route('auth.save')}}" method="post">
                @if(Session::get('Exito'))
                    <div class="alert alert-success">
                    {{Session::get('Exito')}}
                    </div>
                @endif
                    @if(Session::get('Error'))
                        <div class="alert alert-danger">
                        {{Session::get('Error')}}
                        </div>
                    @endif
                @csrf
                <div class="form-group">
                    <label> Name </label>
                    <input type="text" class="form-control" name="name" placeholder="Ingresa su nombre completo" value="{{ old('name') }}">
                </div>
                <span class="text-danger"> @error('name'){{$message}}@enderror</span>
                <div class="form-group">
                    <label> Email </label>
                    <input type="text" class="form-control" name="email" placeholder="Ingresa un correo" value="{{ old('email') }}">
                </div>
                <span class="text-danger"> @error('email'){{$message}}@enderror</span>
                <div class="form-group">
                    <label> Passowrd </label>
                    <input type="password" class="form-control" name="password" placeholder="Ingrese su password">
                </div>
                <span class="text-danger"> @error('password'){{$message}}@enderror</span>
                <button type="submit" class="btn btn-block btn-primary">Registrarme</button>
                <br>
                <a href="{{route('auth.login')}}"> Ya tiene cuenta? Inicie sesion!</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
