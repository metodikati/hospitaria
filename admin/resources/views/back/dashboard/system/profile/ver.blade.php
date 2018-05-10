@extends('layouts.master')

{{-- Page Title --}}
@section('pageTitle')
	Ver Perfil
@stop

{{-- Module Name --}}
@section('moduleName')
	Ver Perfil
@stop

{{-- Action Button --}}
@section('addButton')
	<a href="{!! url('admin/dashboard/sistema/perfil') !!}" class="btn btn-primary back_button">Regresar</a>
@stop

{{-- Contenido --}}
@section('content')
	<div class="row">
		<div class="col-md-12">
			{!! Form::open([
 				'role'  => 'form'
			]) !!}			
				<input type="hidden" value="{{ $id }}" id="id" name="id" />

				<div class="row">
					<div class="form-group">
                        <label>Nombre de Perfil:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre">
                    </div>

					@foreach ($modules as $module)

						@if(count($module['child']) > 0)

							<div class="col-sm-6">
								<div class="box border primary">
									<div class="box-body">
										<table class="table table-bordered table-hover table-striped">
											<thead>
												<tr>
													<th class="select-all pointer"></th>
													<th class="select-all pointer text-center" data-id="{!! $module['id'] !!}-READ">Vista</th>
													<th class="select-all pointer text-center" data-id="{!! $module['id'] !!}-CREATE">Alta</th>
													<th class="select-all pointer text-center" data-id="{!! $module['id'] !!}-DELETE">Baja</th>
													<th class="select-all pointer text-center" data-id="{!! $module['id'] !!}-UPDATE">Cambios</th>
												</tr>
											</thead>

											<tbody>
												@foreach ($module['child'] as $children)												
													@include('sistema.perfil.partials.innerTable', ['children' => $children, 'parentID' => $module['id']])
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>

						@else

							<div class="col-sm-6">
								<div class="box border primary">
									<div class="box-body">
										<table class="table table-bordered table-hover table-striped">
											<thead>
												<tr>
													<th class="select-all pointer"></th>
													<th class="select-all pointer text-center" data-id="{!! $module['id'] !!}-READ">Vista</th>
													<th class="select-all pointer text-center" data-id="{!! $module['id'] !!}-CREATE">Alta</th>
													<th class="select-all pointer text-center" data-id="{!! $module['id'] !!}-DELETE">Baja</th>
													<th class="select-all pointer text-center" data-id="{!! $module['id'] !!}-UPDATE">Cambios</th>
												</tr>
											</thead>

											<tbody>
													@include('sistema.perfil.partials.innerTable', ['children' => $module, 'parentID' => $module['id']])
											</tbody>
										</table>
									</div>
								</div>
							</div>


						@endif

					@endforeach
				</div>

			{!! Form::close() !!}
		</div>
	</div>
 

@stop

@section('pageJS')
	{!! Html::script('assets/js/sistema/perfil/ver.js') !!}	
@stop