@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <br>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">

                                {{ __('messages.produc_de') }}{{ $emprendimiento->nombreEmprendimiento }}
                            </span>
                            <div class="float-right">
                                <div class="ordenar-leyenda" style="float: left; padding-right: 10px;">
                                    {{ __('messages.ord_prec') }}
                                </div>
                                <div style="clear: both;"></div>
                                <button id="ordenarPorPrecioAsc"
                                    class="btn btn-primary ordenar-precio">{{ __('messages.menor_mayor') }}</button>
                                <button id="ordenarPorPrecioDesc"
                                    class="btn btn-primary ordenar-precio">{{ __('messages.mayor_menor') }}</button>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="catalogo" class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>N#</th>
                                        <th>Producto</th>
                                        <th>Precio</th>
                                        <th>Estado</th>
                                        <th>Imagen</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($catalogos as $catalogo)
                                        @if ($catalogo->estado === 'activo')
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $catalogo->nombreCatalogos }}</td>
                                                <td>₡{{ number_format($catalogo->cantidad, 2, ',', '.') }} </td>
                                                <td>{{ $catalogo->estado }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/image/' . $catalogo->foto) }}"
                                                        width="150" alt="" title="" />
                                                </td>
                                                <td>
                                                    <!-- Agrega aquí los botones que necesites -->
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- <div class="row mt-0">
                                                    <div class="col-md-0 offset-md-0">
                                                        <a class="btn btn-danger" href="{{ url('/') }}">Atrás</a>
                                                    </div>
                                                </div> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .btn btn-primary ordenar-precio {
            width: 10000px;
        }
    </style>


@stop

@section('js')

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>

    <script>
        let table = $('#catalogo').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
            }
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tabla = document.querySelector("table");
            const tbody = tabla.querySelector("tbody");
            const botonesOrdenar = document.querySelectorAll(".ordenar-precio");

            botonesOrdenar.forEach((boton) => {
                boton.addEventListener("click", function() {
                    const filas = Array.from(tbody.querySelectorAll("tr"));

                    filas.sort((a, b) => {
                        const precioA = parseFloat(a.querySelector("td:nth-child(3)")
                            .textContent.trim().replace("₡", "").replace(/\./g, "")
                            .replace(',', '.'));
                        const precioB = parseFloat(b.querySelector("td:nth-child(3)")
                            .textContent.trim().replace("₡", "").replace(/\./g, "")
                            .replace(',', '.'));

                        if (boton.id === "ordenarPorPrecioAsc") {
                            return precioA - precioB; // De menor a mayor
                        } else {
                            return precioB - precioA; // De mayor a menor
                        }
                    });

                    filas.forEach((fila) => tbody.appendChild(fila));
                });
            });
        });
    </script>
@stop
