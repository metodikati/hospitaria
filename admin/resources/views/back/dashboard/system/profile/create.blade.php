@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
	Alta de nuevo Perfil
@stop

{{-- Module Name --}}
@section('contentTitle')
	Alta de nuevo Perfil
@stop

{{-- Action Button --}}
@section('pageTopButton')
	<a href="{!! url('admin/dashboard/sistema/perfil') !!}" class="btn btn-primary">Regresar</a>
@stop

 

{{-- Content --}}
@section('mainContent')
	<div class="row">
		<div class="col-md-12">
			{!! Form::open() !!}

				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
	                        <label>Nombre de Perfil:</label>
	                        <input type="text" class="form-control" name="nombre">
	                    </div>
                    </div>
                </div>
                <div class="row"> 

					@foreach ($modules as $module)
						@if(count($module['child']) > 0)
							<div class="col-sm-6">
								<div class="col-sm-12 text-center">
									<h3>{{$module['name']}}</h3>
								</div>							
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
													@include('back.dashboard.system.profile.partials.innerTable', ['children' => $children, 'parentID' => $module['id']])
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
													@include('back.dashboard.system.profile.partials.innerTable', ['children' => $module, 'parentID' => $module['id']])
											</tbody>
										</table>
									</div>
								</div>
							</div>


						@endif

					@endforeach
				</div>


				<div class="form-group text-right">
					<button class="btn btn-primary" type="submit">Guardar</button>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
@stop
  
@section('pageJS')
	{!! Html::script('/back/assets/js/profile/perfil.js') !!}
@stop