@extends('layouts.app')
@section('section')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title">{{ __('messages.emp_por_tipo') }} <span
                                id="tipo">{{ __($tipo) }}</span>
                        </h1>
                    </div>
                    <div class="card-body">

                        <div class="form-group">
                            <label for="distrito">{{ __('messages.selec_dist') }}</label>
                            <select class="form-control" id="distrito">
                                <option value="">{{ __('messages.todos_dist') }}</option>
                                @foreach ($distritos as $distrito)
                                    <option value="{{ $distrito->id }}">{{ $distrito->nombreDistrito }}</option>
                                @endforeach
                            </select>
                        </div>
                        @if ($emprendimientosFiltrados->isEmpty())
                            <div class="alert alert-info">
                                {{ __('messages.no_se_enc') }}
                            </div>
                        @else
                            <ul class="list-group" id="emprendimientosList">
                                @foreach ($emprendimientosFiltrados as $emprendimiento)
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>{{ $emprendimiento->nombreEmprendimiento }}</span>
                                        <div>
                                            <a href="#" class="btn btn-dark btn-sm" data-toggle="modal"
                                                data-target="#emprendimientoModal"
                                                data-emprendimiento="{{ $emprendimiento }}">{{ __('messages.contact') }}</a>
                                            <a href="{{ route('catalogos.por.emprendimiento.informativa', $emprendimiento->idEmprendimiento) }}"
                                                class="btn btn-info btn-sm">{{ __('messages.ver_cat') }}</a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="emprendimientoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('messages.contact_info') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="emprendimientoModalBody">
                    <!--  información del emprendimiento -->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <script src="{{ asset('assets/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('assets/mail/contact.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#distrito').on('change', function() {
                var distritoId = $(this).val();
                var tipo = '{{ $tipo }}'; // Obtener el valor de $tipo de la vista

                var url;
                if (distritoId !== "") {
                    url = '/buscar-emprendimientos/' + distritoId + '/' + tipo;
                } else {
                    url = '/buscar-emprendimientos/todos/' + tipo;
                }


                if (distritoId || distritoId ===
                    "") { // para manejar la opción "Todos los distritos"
                    $.ajax({
                        url: url,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            // Limpiar la lista
                            $('#emprendimientosList').empty();

                            if (data.length > 0) {
                                // Agregar los nuevos elementos a la lista
                                $.each(data, function(key, value) {
                                    $('#emprendimientosList').append(
                                        '<li class="list-group-item d-flex justify-content-between"><span>' +
                                        value.nombreEmprendimiento +
                                        '</span><div><a href="#" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#emprendimientoModal" data-emprendimiento="{{ $emprendimiento }}">Contacto</a> <a href="{{ route('catalogos.por.emprendimiento.informativa', $emprendimiento->idEmprendimiento) }}"class="btn btn-info btn-sm">Ver Catálogo</a></div></li>'
                                    );
                                });
                            } else {
                                // Si no hay emprendimientos relacionados, mostrar un mensaje de error
                                $('#emprendimientosList').append(
                                    '<li class="list-group-item">No se encontraron emprendimientos relacionados a este distrito.</li>'
                                );
                            }
                        }
                    });
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#emprendimientosList').on('click', '.btn-dark', function(e) {
                e.preventDefault();
                var emprendimiento = $(this).data('emprendimiento');
                var telefono2 = emprendimiento.telefono2 || "NA";
                var instagram = emprendimiento.link_instagram || "NA";
                var facebook = emprendimiento.link_facebook || "NA";
                var instagramL = emprendimiento.link_instagram || "#";
                var facebookL = emprendimiento.link_facebook || "#";

                $('#emprendimientoModalBody').html(`
                    <p>{{ __('messages.contact_name') }}: ${emprendimiento.nombre_completo}</p>
                    <p>{{ __('messages.contact_tel1') }}: ${emprendimiento.telefono}</p>
                    <p>{{ __('messages.contact_tel2') }}: ${telefono2}</p>
                    <p>{{ __('messages.contact_email') }}: ${emprendimiento.correo_electronico}</p>
                    <p>Instagram:<a href="${instagramL}" target="_blank"> ${instagram}</a> </p>
                    <p>Facebook: <a href="${facebookL}" target="_blank"> ${facebook}</a> </p>
                `);
            });
        });
    </script>

    <script>
        let spanTipo = document.getElementById("tipo");

        console.log(spanTipo.textContent);

        let lenguaje = localStorage.getItem("lenguaje");

        if (lenguaje === "En") {
            if (spanTipo.textContent === "Productos") {
                spanTipo.textContent = "Products"
            }

            if (spanTipo.textContent === "Servicios") {
                spanTipo.textContent = "Services"
            }

            if (spanTipo.textContent === "Turismo") {
                spanTipo.textContent = "Tourism"
            }
        }

        if (lenguaje == "Es") {
            if (spanTipo.textContent === "Productos") {
                spanTipo.textContent = "Productos"
            }

            if (spanTipo.textContent === "Servicios") {
                spanTipo.textContent = "Servicios"
            }

            if (spanTipo.textContent === "Turismo") {
                spanTipo.textContent = "Turismo"
            }
        }
    </script>
@endsection
