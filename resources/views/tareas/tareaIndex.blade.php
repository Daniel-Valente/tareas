@extends('layouts.tema')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Vista de Tarea</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <a href="{{ action('TareaController@create') }}" class="btn btn-success btn-sm">Nueva Tarea</a>
                        <hr>
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Tarea</th>
                                <th>Descripción</th>
                                <th>Fecha Inicio</th>
                                <th>Fecha Termino</th>
                                <th>Usuario</th>
                                <th>Categoria</th>
                            </tr>
                            @foreach ($tareas as $tarea)
                            <tr>
                                <td>{{ $tarea->id }}</td>
                                <td>
                                    <a href=" {{ route('tarea.show', $tarea->id) }} ">
                                        {{ $tarea->nombre_Tarea }}
                                    </a>
                                </td>
                                <td>{{ $tarea->descripcion }}</td>
                                <td>{{ $tarea->fecha_Inicio->format('d/m/Y') }}</td>
                                <td>{{ $tarea->fecha_Fin->format('d/m/Y') }}</td>
                                <td>{{ $tarea->user->name }}</td>
                                <td>{{ $tarea->categoria->nombre_Categoria }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
