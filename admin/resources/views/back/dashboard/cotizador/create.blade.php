@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
  Alta-Cotizador
@endsection

{{-- Page CSS --}}
@section('pageCSS')
  {{ Html::style('//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css') }}
@stop

{{-- Content Title --}}
@section('contentTitle')
    Estudio y Cotizador
@stop

{{-- Page Top Button --}}
@section('pageTopButton')
    <a href="{{URL::to(Config::get('app.base_url_admin').'/cotizador')}}" class="btn btn-info"><i class="icofont icofont-rewind"></i> Regresar</a>@stop

{{-- Main Content --}}
@section('mainContent')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Formulario para agregar Estudio y Cotizador</h5>
                    <span>Todos los campos son obligatorios</span>
                </div>

                <div class="card-block">
                    {{ Form::open(['url' => Config::get('app.base_url_admin').'/cotizador/store', 'files' => false]) }}
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Categoria*</label>

                        <div class="col-sm-10">
                            {{ Form::select('especialidades_id', $categorias, null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Estudio*</label>

                        <div class="col-sm-10">
                            {{ Form::text('estudio', null, ['class' => 'form-control', 'required' => 'required']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Precio*</label>

                        <div class="col-sm-10"> 
                            {{ Form::text('precio', null, ['class' => 'form-control', 'required' => 'required']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Aplica*</label>

                        <div class="col-sm-10">
                            {{ Form::text('incluye', null, ['class' => 'form-control', 'required' => 'required']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">No Aplica *</label>

                        <div class="col-sm-10">
                            {{ Form::text('no_incluye', null, ['class' => 'form-control', 'required' => 'required']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Descripcion</label>

                        <div class="col-sm-10">
                            {{ Form::textarea('descripcion', null, ['class' => 'form-control', 'required' => 'required']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2"></div>

                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary"><i class="icofont icofont-save"></i> Guardar</button> <button type="reset" class="btn btn-danger"><i class="icofont icofont-trash"></i> Borrar</button>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@stop

{{-- Page JS --}}
@section('pageJS')
    {{ Html::script('https://code.jquery.com/ui/1.12.1/jquery-ui.js') }}
@stop
