@extends('back.layout.account')

{{-- Page Title --}}
@section('pageTitle')
	Inicio de sesión
@stop

{{-- Main Content --}}
@section('mainContent')
    {{ Form::open(['url' => 'admin/account/login', 'class' => 'md-float-material']) }}
        <div class="auth-box">
            <div class="row m-b-20">
                <div class="col-md-12"> 
                    <h3 class="text-left txt-primary">Inicio de sesión</h3>
                </div>
            </div>
            <hr />
            @if(count($errors) > 0 || Session::has('loginError'))
                <div class="alert alert-danger icons-alert">
                    <h6 class="text-left">Error</h6>
                    <p class="text-left">{{ Session::get('loginMsg') }}</p>
                </div>
            @endif

            <div class="input-group">
                {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Tu cuenta de correo']) }}
                <span class="md-line"></span>
            </div>

            <div class="input-group">
                {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Tu contraseña']) }}
                <span class="md-line"></span>
            </div>

            <div class="row m-t-25 text-left">
                <div class="col-sm-12 col-xs-12 forgot-phone text-right">
                    <a href="{{URL::to('admin/account/password-recovery')}}" class="text-right f-w-600 text-inverse">
                        ¿Olvidaste tu contraseña?
                    </a>
                </div>
            </div>

            <div class="row m-t-30">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Inicio de sesión</button>
                </div>
            </div>

            <hr />
            <div class="row">
                <div class="col-md-10">
                    <p class="text-inverse text-left m-b-0">Desarrollador por</p>
                    <a href="http://www.metodika.mx/"  target="_blank"> <p class="text-inverse text-left"><b>Metodika TI</b></p></a>
                </div>
            </div>
        </div>
    {{ Form::close()  }}
@stop
