@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<br>
@stop

@section('content')
<section class="content container-fluid">
    <div class="">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">{{ __('Update') }} Catalogo</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('catalogos.update', $catalogo->idCatalogos) }}" role="form" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf

                        @include('catalogo.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop