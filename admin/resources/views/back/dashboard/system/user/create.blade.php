@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
    Alta de nuevo usuario
@stop

{{-- Content Title --}}
@section('contentTitle')
    Alta de nuevo usuario
@stop

{{-- Page Top Button --}}
@section('pageTopButton')
    <a href="{{URL::to('admin/dashboard/system/user')}}" class="btn btn-info"><i class="icofont icofont-rewind"></i> Regresar</a>
@stop

{{-- Main Content --}}
@section('mainContent')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Formulario de alta de nuevo usuario</h5>
                </div>

                <div class="card-block">
                    <h4 class="sub-title">Todos los campos son obligatorios.</h4>

                    {{ Form::open(['url' => 'admin/dashboard/system/user/store']) }}
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nombre</label>

                            <div class="col-sm-10">
                                {{ Form::text('nombre', null, ['class' => 'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Email</label>

                            <div class="col-sm-10">
                                {{ Form::email('email', null, ['class' => 'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Contraseña</label>

                            <div class="col-sm-10">
                                {{ Form::password('password', ['class' => 'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Confirmar Contraseña</label>

                            <div class="col-sm-10">
                                {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-2"></div>

                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary"><i class="icofont icofont-save"></i> Guardar</button> <button type="reset" class="btn btn-danger"><i class="icofont icofont-refresh"></i> Limpiar</button>
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@stop

{{-- Page JS --}}
