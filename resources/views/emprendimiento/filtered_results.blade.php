@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <br>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title">Emprendimientos de tipo "{{ $tipo }}"</h1>
                    </div>
                    <div class="card-body">
                        @if ($emprendimientosFiltrados->isEmpty())
                            <div class="alert alert-info">
                                No se encontraron emprendimientos de este tipo.
                            </div>
                        @else
                            <ul class="list-group">
                                @foreach ($emprendimientosFiltrados as $emprendimiento)
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>{{ $emprendimiento->nombreEmprendimiento }}</span>
                                        <a href="{{ route('catalogos.por.emprendimiento', $emprendimiento->idEmprendimiento) }}"
                                            class="btn btn-info btn-sm">Ver Catálogo</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
