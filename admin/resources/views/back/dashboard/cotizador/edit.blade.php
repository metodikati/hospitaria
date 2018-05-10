@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
  Cotizador
@endsection

{{-- Content Title --}}
@section('contentTitle')
    Cotizador
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
                    {{ Form::open(['url' => Config::get('app.base_url_admin').'/cotizador/update/'.base64_encode($cotizador->id), 'files' => true]) }}

					 <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Categoria*</label>

                        <div class="col-sm-10">

                            <select name="especialidades_id" class="form-control">
                                 <option  value="">selecciona categoria</option>
                                    @foreach ($categorias as $cat)
                                        @if ($cat->id == $cotizador->cotizador_id)
                                         <option value="{{ $cat->id }}" selected>{{ $cat->estudio }} </option>
                                        @else
                                            <option value="{{ $cat->id }}">{{ $cat->estudio }} </option>
                                        @endif
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Estudio*</label>

                        <div class="col-sm-10">
                            {{ Form::text('estudio', $cotizador->estudio_sub, ['class' => 'form-control', 'required' => 'required']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Precio*</label>

                        <div class="col-sm-10"> 
                            {{ Form::text('precio', $cotizador->precio, ['class' => 'form-control', 'required' => 'required']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Aplica*</label>

                        <div class="col-sm-10">
                            {{ Form::text('incluye', $cotizador->incluye, ['class' => 'form-control', 'required' => 'required']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">No Aplica *</label>

                        <div class="col-sm-10">
                            {{ Form::text('no_incluye', $cotizador->no_incluye, ['class' => 'form-control', 'required' => 'required']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Descripcion</label>

                        <div class="col-sm-10">
                            {{ Form::textarea('descripcion', $cotizador->descripcion, ['class' => 'form-control', 'required' => 'required']) }}
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

