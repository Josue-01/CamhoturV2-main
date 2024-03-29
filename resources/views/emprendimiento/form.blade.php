<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Distrito: </strong>
                    <br>

                    <select class="form-control" name="id_Distrito" id="initialServers" multiple="multiple">
                        @foreach ($distrito as $distrito_s)
                            <option value="{{ $distrito_s->id }}">{{ $distrito_s->nombreDistrito }}
                        @endforeach
                    </select>

                </div>

            </div>
            <div class="invalid-feedback">:message</div>
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Emprendimiento') }}
            {{ Form::text('nombreEmprendimiento', $emprendimiento->nombreEmprendimiento, ['class' => 'form-control' . ($errors->has('nombreEmprendimiento') ? ' is-invalid' : ''), 'placeholder' => 'Digite el nombre del emprendimiento...']) }}
            {!! $errors->first('nombreEmprendimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Tipo de emprendimiento') }}
            {{ Form::select('tipo_emprendimiento', ['' => 'Seleccione:', 'Productos' => 'Productos', 'Servicios' => 'Servicios', 'Turismo' => 'Turismo'], $emprendimiento->tipo_emprendimiento, ['class' => 'form-control', 'id' => 'tipo_emprendimiento', 'onchange' => 'cambioUnidad();', 'required']) }}
            {!! $errors->first('Tipo de emprendimiento', '<div class="invalid-feedback">Campo Obligatorio</div>') !!}
        </div>
<br>
        {{-- <br>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('descripcionEmprendimiento', $emprendimiento->descripcionEmprendimiento, ['class' => 'form-control' . ($errors->has('descripcionEmprendimiento') ? ' is-invalid' : ''), 'placeholder' => 'Describa el emprendimiento...']) }}
            {!! $errors->first('descripcionEmprendimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}

        <div class="form-group">
            {{ Form::label('Nombre completo') }}
            {{ Form::text('nombre_completo', $emprendimiento->nombre_completo, ['class' => 'form-control' . ($errors->has('nombre_completo') ? ' is-invalid' : ''), 'placeholder' => 'Digite el Nombre completo...']) }}
            {!! $errors->first('nombre_completo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
<br>
        <div class="form-group">
            {{ Form::label('Teléfono 1') }}
            {{ Form::text('telefono', $emprendimiento->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Digite el teléfono 1']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
<br>
        <div class="form-group">
            {{ Form::label('Teléfono 2') }}
            {{ Form::text('telefono2', $emprendimiento->telefono2, ['class' => 'form-control' . ($errors->has('telefono2') ? ' is-invalid' : ''), 'placeholder' => 'Digite el teléfono 2']) }}
            {!! $errors->first('telefono2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
<br>
        <div class="form-group">
            {{ Form::label('Correo electrónico') }}
            {{ Form::text('correo_electronico', $emprendimiento->correo_electronico, ['class' => 'form-control' . ($errors->has('correo_electronico') ? ' is-invalid' : ''), 'placeholder' => 'Digite el correo electrónico...']) }}
            {!! $errors->first('correo_electronico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
<br>
        <div class="form-group">
            {{ Form::label('Link Facebook') }}
            {{ Form::text('link_facebook', $emprendimiento->link_facebook, ['class' => 'form-control' . ($errors->has('link_facebook') ? ' is-invalid' : ''), 'placeholder' => 'Digite el link de facebook']) }}
            {!! $errors->first('link_facebook', '<div class="invalid-feedback">:message</div>') !!}
        </div>
<br>
        <div class="form-group">
            {{ Form::label('Link Instagram') }}
            {{ Form::text('link_instagram', $emprendimiento->link_instagram, ['class' => 'form-control' . ($errors->has('link_instagram') ? ' is-invalid' : ''), 'placeholder' => 'Digite el link de instagram']) }}
            {!! $errors->first('link_instagram', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <br>
        <button type="submit" class="btn btn-primary">Listo</button>

        <span style="margin: 0 10px;"></span>

        <a class="btn btn-danger" href="{{ route('emprendimientos.index') }}">Atrás</a>
    </div>
