@extends('back.layout.dashboard')
 
{{-- Page Title --}}
@section('pageTitle')
  Home
@endsection

{{-- Content Title --}}
@section('contentTitle')
    <span class="tituloHospi">Hospitaria</span> 
@stop

{{-- Page Top Button --}}
@section('pageTopButton')
    <span class="tituloHospi1">Administrador</span> 
@stop

{{-- Main Content --}}
@section('mainContent')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <span class="icono"></span>
                </div>
            </div>
        </div>
    </div>
@stop

{{-- Page JS --}}
@section('pageJS')
    {{ Html::script('back/js/dashboard/blog/category/home.js') }}
@stop
