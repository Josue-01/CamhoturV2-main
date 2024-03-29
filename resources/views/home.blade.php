@extends('layouts.app')
@section('section')
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('carusel_img/HojanchaW.webp') }}" alt="Image" style="height: 700px;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <!-- <h4 class="text-white text-uppercase mb-md-3">CAMHOTUR</h4> -->
                            <h1 class="display-3 text-white mb-md-4">Hojancha</h1>
                            <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2"></a> -->
                            <!-- <div class="container d-flex justify-content-center mt-5"> -->

                            <button type="button" class="btn btn-primary py-md-3 px-md-5 mt-2" data-toggle="modal"
                                data-target="#hojanchaModal">
                                {{ __('messages.btn_informacion') }}
                            </button>

                            <!-- </div> -->
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('carusel_img/HuacasW.webp') }}" alt="Image" style="height: 700px;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px; max-height: 700px;">
                            <!-- <h4 class="text-white text-uppercase mb-md-3">CAMHOTUR</h4> -->
                            <h1 class="display-3 text-white mb-md-4">Huacas</h1>
                            <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2"></a> -->

                            <button type="button" class="btn btn-primary py-md-3 px-md-5 mt-2" data-toggle="modal"
                                data-target="#huacasModal">
                                {{ __('messages.btn_informacion') }}
                            </button>

                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('carusel_img/DMonte_RomoW.webp') }}" alt="Image"
                        style="height: 700px;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px; max-height: 700px;">
                            <!-- <h4 class="text-white text-uppercase mb-md-3">CAMHOTUR</h4> -->
                            <h1 class="display-3 text-white mb-md-4">Monte Romo</h1>
                            <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">('messages.btn_informacion') }}</a> -->

                            <button type="button" class="btn btn-primary py-md-3 px-md-5 mt-2" data-toggle="modal"
                                data-target="#monteRomoModal">
                                {{ __('messages.btn_informacion') }}
                            </button>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('carusel_img/MatambuW.webp') }}" alt="Image" style="height: 700px;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px; max-height: 700px;">
                            <!-- <h4 class="text-white text-uppercase mb-md-3">CAMHOTUR</h4> -->
                            <h1 class="display-3 text-white mb-md-4">Matambú</h1>
                            <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2"></a> -->
                            <button type="button" class="btn btn-primary py-md-3 px-md-5 mt-2" data-toggle="modal"
                                data-target="#matambuModal">
                                {{ __('messages.btn_informacion') }}
                            </button>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('carusel_img/Puerto_CarrilloW.webp') }}" alt="Image"
                        style="height: 700px;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px; max-height: 700px;">
                            <!-- <h4 class="text-white text-uppercase mb-md-3">CAMHOTUR</h4> -->
                            <h1 class="display-3 text-white mb-md-4">Puerto Carrillo</h1>
                            <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2"></a> -->
                            <button type="button" class="btn btn-primary py-md-3 px-md-5 mt-2" data-toggle="modal"
                                data-target="#puertoCarrilloModal">
                                {{ __('messages.btn_informacion') }}
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->



    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100"
                            src="{{ asset('images/Aerial_view_of_Carrillo.png') }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <!-- <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h6> -->
                        <h2 id="que_es" class="mb-3">{{ __('messages.title_que_es') }}</h2>
                        <p>{{ __('messages.content_que_es') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->



    <!-- Feature Start -->
    <div class="container-fluid">
        <div class="container pb-5">
            <div class="text-center mb-3 pb-3">
                <h2 id="mvv" class="text-primary text-uppercase" style="letter-spacing: 5px;">
                    {{ __('messages.mvv') }}</h2>
                <!-- <h1>Misión, Visión y Valores</h1> -->
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3"
                            style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-bullseye text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">{{ __('messages.m') }}</h5>
                            <p class="m-0" style="font-size: 20px;">{{ __('messages.mision') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3"
                            style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-lightbulb text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">{{ __('messages.v') }}</h5>
                            <p class="m-0" style="font-size: 20px;">{{ __('messages.vision') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3"
                            style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-heart text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">{{ __('messages.va') }}</h5>
                            <ul class="list-unstyled">
                                <li>
                                    <span
                                        style="color: black; font-weight: bold; font-size: 20px; margin-right: 1px;">H</span><span
                                        style="font-size: 16px;">{{ __('messages.humildad') }}</span>
                                </li>
                                <li>
                                    <span
                                        style="color: black; font-weight: bold; font-size: 20px; margin-right: 1px;">O</span><span
                                        style="font-size: 16px;">{{ __('messages.optimismo') }}</span>
                                </li>
                                <li>
                                    <span
                                        style="color: black; font-weight: bold; font-size: 20px; margin-right: 1px;">J</span><span
                                        style="font-size: 16px;">{{ __('messages.jovialidad') }}</span>
                                </li>
                                <li>
                                    <span
                                        style="color: black; font-weight: bold; font-size: 20px; margin-right: 1px;">{{ __('messages.a') }}</span><span
                                        style="font-size: 16px;">{{ __('messages.amistad') }}</span>
                                </li>
                                <li>
                                    <span
                                        style="color: black; font-weight: bold; font-size: 20px; margin-right: 1px;">N</span><span
                                        style="font-size: 16px;">{{ __('messages.naturaleza') }}</span>
                                </li>
                                <li>
                                    <span
                                        style="color: black; font-weight: bold; font-size: 20px; margin-right: 1px;">{{ __('messages.c') }}</span><span
                                        style="font-size: 16px;">{{ __('messages.calidad') }}</span>
                                </li>
                                <li>
                                    <span
                                        style="color: black; font-weight: bold; font-size: 20px; margin-right: 1px;">H</span><span
                                        style="font-size: 16px;">{{ __('messages.honestidad') }}</span>
                                </li>
                                <li>
                                    <span
                                        style="color: black; font-weight: bold; font-size: 20px; margin-right: 1px;">{{ __('messages.l') }}</span><span
                                        style="font-size: 16px;">{{ __('messages.amor') }}</span>
                                </li>
                                <!-- Agrega otros elementos de la lista aquí -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->



    <!-- Blog Start -->
    <div class="container-fluid">
        <div class="container pb-3">
            <div class="text-center mb-3 pb-3">
                <h2 id="encargados">{{ __('messages.encargados') }}</h2>
            </div>
            <div class="row justify-content-center justify-content-lg-center">

                <div class="col-lg-3 col mb-4">
                    <div class="team-item bg-white" style="transform: scale(0.8);">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" style="height: 300px;"
                                src="{{ asset('images/DonEzequielW.webp') }}" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h5 class="font-weight-bold">{{ __('messages.director_camhotur') }}</h5>
                            <p class="m-0">Ezequiel Aguirre Pérez</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col mb-4">
                    <div class="team-item bg-white" style="transform: scale(0.8);">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" style="height: 300px;"
                                src="{{ asset('images/CarlosAvila2.webp') }}" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h5 class="font-weight-bold">{{ __('messages.asociado_camhotur') }}</h5>
                            <p class="m-0">Carlos Ávila Mata</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Blog End -->





    <!-- Blog Start -->
    <div class="container-fluid">
        <div class="container pb-3">
            <div class="text-center mb-3 pb-3">
                <h2 id="entidades">{{ __('messages.entidades') }}</h2>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">

                <div class="col mb-4">
                    <div class="team-item bg-white" style="transform: scale(0.8);">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" style="height: 261px;"
                                src="{{ asset('images/LogoSedeW.webp') }}" alt="">
                        </div>
                        <div class="text-center py-4">
                            <p class="m-3">Universidad Nacional Sede Regional Chorotega</p>
                        </div>
                    </div>
                </div>

                <div class="col mb-4">
                    <div class="team-item bg-white" style="transform: scale(0.8);">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" style="height: 261px;"
                                src="{{ asset('images/CarreraLogoW.webp') }}" alt="">
                        </div>
                        <div class="text-center py-4">
                            <p class="m-1">{{ __('messages.carrera_ing') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col mb-4">
                    <div class="team-item bg-white" style="transform: scale(0.8);">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" style="height: 261px;"
                                src="{{ asset('images/LogoCamhoturW.webp') }}" alt="">
                        </div>
                        <div class="text-center py-4">
                            <p class="m-3">Cámara Hojancheña de Turismo</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Blog End -->




    <!-- Blog Start -->
    <div class="container-fluid">
        <div class="container pb-3">
            <div class="text-center mb-3 pb-3">
                <h2 id="desarrolladores">{{ __('messages.desarrolladores') }}</h2>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">

                <div class="col mb-4">
                    <div class="team-item bg-white" style="transform: scale(0.8);">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" style="height: 230px;"
                                src="{{ asset('images/PruebaAvatarW.webp') }}" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">FULL-STACK</h5>
                            <p class="m-0">Fabián Bolaños Morales</p>
                        </div>
                    </div>
                </div>

                <div class="col mb-4">
                    <div class="team-item bg-white" style="transform: scale(0.8);">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" style="height: 230px;"
                                src="{{ asset('images/PruebaAvatarW.webp') }}" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">FULL-STACK</h5>
                            <p class="m-0">Gabriela Juárez Hernández</p>
                        </div>
                    </div>
                </div>

                <div class="col mb-4">
                    <div class="team-item bg-white" style="transform: scale(0.8);">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" style="height: 230px;"
                                src="{{ asset('images/PruebaAvatarW.webp') }}" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">FULL-STACK</h5>
                            <p class="m-0">Solmahr Leal Rivas</p>
                        </div>
                    </div>
                </div>

                <div class="col mb-4">
                    <div class="team-item bg-white" style="transform: scale(0.8);">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" style="height: 230px;"
                                src="{{ asset('images/PruebaAvatarW.webp') }}" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">FULL-STACK</h5>
                            <p class="m-0">Marvin Alvarado Lopez</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Zona Turística Potencial -->
    {{-- <section class="container py-4" style="font-family: Arial, sans-serif; line-height: 2;">
        <h2 id="zona_turistica" class="text-center mb-0" style="font-size: 26px;">
            <strong>{!! __('messages.zona_turistica') !!}</strong>
        </h2>
        <br>
        <div class="d-flex flex-column">
            <span class="heading d-block">{!! __('messages.razon_1') !!}</span>
            <span class="subheadings">{{ __('messages.razon_1_texto') }}</span>
        </div>
        <br>
        <div class="d-flex flex-column">
            <span class="heading d-block">{!! __('messages.razon_2') !!}</span>
            <span class="subheadings">{{ __('messages.razon_2_texto') }}</span>
        </div>
        <br>
        <div class="d-flex flex-column">
            <span class="heading d-block">{!! __('messages.razon_3') !!}</span>
            <span class="subheadings">{{ __('messages.razon_3_texto') }}</span>
        </div>
        <br>
        <div class="d-flex flex-column">
            <span class="heading d-block">{!! __('messages.razon_4') !!}</span>
            <span class="subheadings">{{ __('messages.razon_4_texto') }}</span>
        </div>
    </section> --}}


    <div class="container-fluid">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h2 id="zona_turistica" class="text-center mb-0" style="font-size: 26px;">
                    <strong>{!! __('messages.zona_turistica') !!}</strong>
                </h2>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-route mx-auto mb-4"></i>
                        <h5 class="mb-2">{!! __('messages.razon_1') !!}</h5>
                        <p class="m-0">{{ __('messages.razon_1_texto') }}</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-ticket-alt mx-auto mb-4"></i>
                        <h5 class="mb-2">{!! __('messages.razon_2') !!}</h5>
                        <p class="m-0">{{ __('messages.razon_2_texto') }}</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        <h5 class="mb-2">{!! __('messages.razon_3') !!}</h5>
                        <p class="m-0">{{ __('messages.razon_3_texto') }}</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-route mx-auto mb-4"></i>
                        <h5 class="mb-2">{!! __('messages.razon_4') !!}</h5>
                        <p class="m-0">{{ __('messages.razon_4_texto') }}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="hojanchaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> {{ __('messages.info_distrito') }} </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <!-- <span aria-hidden="true"><i class="fa fa-close"></i></span> -->
                    </button>
                </div>

                <div class="modal-body">
                    <div class="row g-0">
                        <div class="col-md border-right">
                            <div class="status p-3">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <span class="heading d-block">{!! __('messages.descripcion_ho') !!}</span>
                                                    <span
                                                        class="subheadings">{{ __('messages.descripcion_text_ho') }}</span>
                                                </div>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <span class="heading d-block"> {!! __('messages.ubicacion_ho') !!} </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="d-flex flex-column">
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15713.99847071314!2d-85.41914105000001!3d10.05808585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f9fbab6419868c1%3A0x5fc5a738d1b6b9de!2sProvincia%20de%20Guanacaste%2C%20Hojancha!5e0!3m2!1ses!2scr!4v1708365080438!5m2!1ses!2scr"
                                                        width="700" height="350" style="border:0;"
                                                        allowfullscreen="" loading="lazy"
                                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  -->

    <div class="modal fade" id="huacasModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> {{ __('messages.info_distrito') }} </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <!-- <span aria-hidden="true"><i class="fa fa-close"></i></span> -->
                    </button>
                </div>

                <div class="modal-body">
                    <div class="row g-0">
                        <div class="col-md border-right">
                            <div class="status p-3">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <span class="heading d-block">{!! __('messages.descripcion_heading_hu') !!}</span>
                                                    <span
                                                        class="subheadings">{{ __('messages.descripcion_text_hu') }}</span>
                                                    <br> <!-- Espacio agregado entre la descripción y la ubicación -->
                                                    <span class="heading d-block">{!! __('messages.ubicacion_heading_hu') !!}</span>
                                                    <span
                                                        class="subheadings">{{ __('messages.ubicacion_text_hu') }}</span>
                                                </div>
                                                <style>
                                                    .subheadings {
                                                        margin-bottom: 20px;
                                                        /* Ajusta el valor según sea necesario */
                                                    }
                                                </style>


                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <span class="heading d-block"> {!! __('messages.ubicacion_hu') !!} </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="d-flex flex-column">
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31431.089039769315!2d-85.36122139999999!3d10.0262546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f9fa49f3e23aa93%3A0x7fdb594211cb9a6a!2sProvincia%20de%20Guanacaste%2C%20Huacas!5e0!3m2!1ses!2scr!4v1708372769489!5m2!1ses!2scr"
                                                        width="700" height="350" style="border:0;"
                                                        allowfullscreen="" loading="lazy"
                                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  -->

    <div class="modal fade" id="monteRomoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> {{ __('messages.info_distrito') }} </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <!-- <span aria-hidden="true"><i class="fa fa-close"></i></span> -->
                    </button>
                </div>

                <div class="modal-body">
                    <div class="row g-0">
                        <div class="col-md border-right">
                            <div class="status p-3">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <span class="heading d-block">{!! __('messages.descripcion_romo') !!}</span>
                                                    <span
                                                        class="subheadings">{{ __('messages.descripcion_text_romo') }}</span>
                                                </div>


                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <span class="heading d-block"> {!! __('messages.ubicacion_romo') !!}</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="d-flex flex-column">
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7858.442265061447!2d-85.3838647!3d9.998584300000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f9fa4597ca11463%3A0xbe66376f55a2ac4e!2sProvincia%20de%20Guanacaste%2C%20Monte%20Romo!5e0!3m2!1ses!2scr!4v1708372839548!5m2!1ses!2scr"
                                                        width="700" height="350" style="border:0;"
                                                        allowfullscreen="" loading="lazy"
                                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  -->

    <div class="modal fade" id="matambuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> {{ __('messages.info_distrito') }} </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <!-- <span aria-hidden="true"><i class="fa fa-close"></i></span> -->
                    </button>
                </div>

                <div class="modal-body">
                    <div class="row g-0">
                        <div class="col-md border-right">
                            <div class="status p-3">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <span class="heading d-block">{!! __('messages.descripcion_mata') !!}</span>
                                                    <span
                                                        class="subheadings">{{ __('messages.descripcion_text_mata') }}</span>
                                                </div>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <span class="heading d-block"> {!! __('messages.ubicacion_mata') !!} </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="d-flex flex-column">
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7856.262785047611!2d-85.4208362!3d10.088318600000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f9fba8c08620079%3A0xeb977c9a153e63d7!2sProvincia%20de%20Guanacaste%2C%20Hojancha%2C%20Matamb%C3%BA!5e0!3m2!1ses!2scr!4v1708372874221!5m2!1ses!2scr"
                                                        width="700" height="350" style="border:0;"
                                                        allowfullscreen="" loading="lazy"
                                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  -->

    <div class="modal fade" id="puertoCarrilloModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> {{ __('messages.info_distrito') }} </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <!-- <span aria-hidden="true"><i class="fa fa-close"></i></span> -->
                    </button>
                </div>

                <div class="modal-body">
                    <div class="row g-0">
                        <div class="col-md border-right">
                            <div class="status p-3">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <span class="heading d-block">{!! __('messages.descripcion_pue') !!}</span>
                                                    <span
                                                        class="subheadings">{{ __('messages.descripcion_text_pue') }}</span>
                                                </div>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <span class="heading d-block"> {!! __('messages.ubicacion_pue') !!} </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="d-flex flex-column">
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7861.579333661974!2d-85.4802632!3d9.868006099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f9f0779c5355431%3A0xa8bffef327125a96!2sProvincia%20de%20Guanacaste%2C%20Puerto%20Carrillo!5e0!3m2!1ses!2scr!4v1708372962440!5m2!1ses!2scr"
                                                        width="700" height="350" style="border:0;"
                                                        allowfullscreen="" loading="lazy"
                                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('assets/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('assets/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
@endsection
