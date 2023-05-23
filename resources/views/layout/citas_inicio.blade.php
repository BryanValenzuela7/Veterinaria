@extends('layout.admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{route("citas.create")}}" class="btn btn-success mb-2">Agregar</a>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Descripcion de la cita</th>
                        <th>Edite su cita</th>
                        <th>Elimine su cita</th></tr>
                    </thead>
                    <tbody>
                    @foreach($citas as $cita)
                        <tr>
                            <td>{{$cita->date}} Hora: {{$cita->hora}} Mascota {{$cita->mascota}} Con {{$cita->seleccion}}</td>
                            <td>
                                <a class="btn btn-warning" href="{{route("citas.edit",[$cita])}}">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{route("citas.destroy", [$cita])}}" method="post">
                                    @method("delete")
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection


