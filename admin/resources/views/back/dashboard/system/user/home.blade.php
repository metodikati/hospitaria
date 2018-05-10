@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
    Usuarios
@stop

{{-- Content Title --}}
@section('contentTitle')
    Catálogo de Usuarios
@stop

{{-- Page Top Button --}}
@section('pageTopButton')
    <a href="{{URL::to('admin/dashboard/system/user/create')}}" class="btn btn-info"><i class="icofont icofont-plus-circle"></i> Nuevo usuario</a>
@stop

{{-- Main Content --}}
@section('mainContent')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Tabla de usuarios registrados en el sistema</h5>
                </div>

                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$centinel++}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <a href="{{URL::to('admin/dashboard/system/user/edit/'.base64_encode($user->id))}}" class="btn btn-warning"><i class="icofont icofont-pencil"></i>Editar</a>

                                        <a href="{{URL::to('admin/dashboard/system/user/delete/'.base64_encode($user->id))}}" class="btn btn-danger btn-delete" data-name='{{$user->name}}'><i class="icofont icofont-trash"></i>Borrar</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

{{-- Page JS --}}
@section('pageJS')
    {{ Html::script('back/js/dashboard/system/user/home.js')  }}
@stop