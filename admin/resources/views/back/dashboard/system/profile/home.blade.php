@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
	Perfil de Usuario
@stop

{{-- Module Name --}}
@section('contentTitle')
	Perfil de Usuario
@stop
 

{{-- Action Button --}}
@section('pageTopButton')
	{!! $createButton !!}
@stop

{{-- Content --}}
@section("mainContent")
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Tabla de perfiles de usuario registrados en el sistema</h5>
                </div>

                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nombre</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($data as $user)
                                <tr>
                                    <td>{{$centinel++}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>
                                    	@if ($permitions['edit'])
                                        	<a href="{{URL::to('admin/dashboard/system/profile/edit/'.base64_encode($user->id))}}" class="btn btn-warning"><i class="icofont icofont-pencil"></i>Editar</a>
                                        @endif
                                        @if ($permitions['delete'])
                                        	<a href="{{URL::to('admin/dashboard/system/profile/delete/'.base64_encode($user->id))}}" class="btn btn-danger btn-delete" data-name='{{$user->name}}'><i class="icofont icofont-trash"></i>Borrar</a>
                                        @endif
                                        @if ($permitions['view'])
											<a href="{{URL::to('admin/dashboard/system/profile/view/'.base64_encode($user->id))}}" class="btn btn-success btn-view" data-name='{{$user->name}}'><i class="icofont icofont-trash"></i>Ver</a>                                        
                                        @endif
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


@section('pageJS')
    {{ Html::script('back/js/dashboard/system/user/home.js')  }}
@stop
