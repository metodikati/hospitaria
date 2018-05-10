@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
  Edición de Categorias
@endsection

{{-- Content Title --}}
@section('contentTitle')
    Categorias
@stop

{{-- Page Top Button --}}
@section('pageTopButton')
    <a href="{{URL::to(Config::get('app.base_url_admin').'/categorias')}}" class="btn btn-info"><i class="icofont icofont-rewind"></i> Regresar</a>@stop

{{-- Main Content --}}
@section('mainContent')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Formulario de edición</h5>
                    <span>Todos los campos son obligatorios</span>
                </div>

                <div class="card-block">
                    {{ Form::open(['url' => Config::get('app.base_url_admin').'/categorias/update/'.base64_encode($categorias->id), 'files' => true]) }}

                    
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Categoria</label>
						<div class="col-sm-10">
                            {{ Form::text('estudio', $categorias->estudio,  ['class' => 'form-control']) }}
                        </div> 
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2"></div>

                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary"><i class="icofont icofont-save"></i> Guardar</button>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@stop

{{-- Page JS --}}
