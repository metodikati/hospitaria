@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
  Edición de Doctores
@endsection

{{-- Content Title --}}
@section('contentTitle')
    Doctores
@stop

{{-- Page Top Button --}}
@section('pageTopButton')
    <a href="{{URL::to(Config::get('app.base_url_admin').'/doctores')}}" class="btn btn-info"><i class="icofont icofont-rewind"></i> Regresar</a>@stop

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
                    {{ Form::open(['url' => Config::get('app.base_url_admin').'/doctores/update/'.base64_encode($doctors->id), 'files' => true]) }}

                    
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nombre del Doctor</label>
						<div class="col-sm-10">
                            {{ Form::text('name', $doctors->name,  ['class' => 'form-control']) }}
                        </div> 
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Especialidad</label>
                        <div class="col-sm-10">
                            <select name="especialidades_id" class="form-control">
                                    <option  value="">selecciona categoria</option>
                                        @foreach ($specialties as $cat)
                                            @if ($cat->id == $doctors->especialidades_id)
                                                <option value="{{ $cat->id }}" selected>{{ $cat->name }} </option>
                                            @else
                                                <option value="{{ $cat->id }}">{{ $cat->name }} </option>
                                            @endif
                                    @endforeach
                                </select>
                        </div> 
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            {{ Form::text('email', $doctors->email, ['class' => 'form-control']) }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Consultorio</label>
                        <div class="col-sm-10">
                            {{ Form::text('consulting_room', $doctors->consulting_room, ['class' => 'form-control']) }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Telefono</label>

                        <div class="col-sm-10">
                            {{ Form::text('phone', $doctors->phone, ['class' => 'form-control']) }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Telefono de Urgencias</label>

                        <div class="col-sm-10">
                            {{ Form::text('urgencias', $doctors->urgencias, ['class' => 'form-control']) }}
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

