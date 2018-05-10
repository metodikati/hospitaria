@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
  Categorias
@endsection

{{-- Content Title --}}
@section('contentTitle')
    Categorias
@stop

{{-- Page Top Button --}}
@section('pageTopButton')
    <a href="{{URL::to(Config::get('app.base_url_admin').'/categorias/create')}}" class="btn btn-info"><i class="icofont icofont-plus-circle"></i>Categorias</a>
@stop

{{-- Main Content --}}
@section('mainContent')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Categorias</h5> 
                </div>
                <div class="dt-responsive table-responsive"> 
                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                            <thead>
                             <tr>
                                 <th  data-type="html">No.</th>
                                 <th  data-type="html">Categorias</th>
                                 <th  data-type="html">Estatus</th>
                                 <th  data-type="html"></th>
                             </tr>
                            </thead>

                            <tbody>
                                @foreach($categorias as $categorias)
                					<tr>
                						<td>{{$centinel++}}</td>
                            			<td>{{$categorias->estudio}}</td>
                            			@if($categorias->estatus != 1)
                            			<td style="color: #1abc9c"><b>{{$categorias->estatus}}</b> </td>
                            			@else
                            			<td>{{$categorias->estatus}}</td>
                            			@endif
                						<td>
                							@if($categorias->estatus != 1)
                								<a href="{{URL::to(Config::get('app.base_url_admin').'/categorias/activar/'.base64_encode($categorias->id))}}" class="btn btn-primary">Activar
                							 	</a>
                							@else	
                							 	<a href="{{URL::to(Config::get('app.base_url_admin').'/categorias/edit/'.base64_encode($categorias->id))}}" class="btn btn-warning">Editar
                							 	</a>
                                				<a href="{{URL::to(Config::get('app.base_url_admin').'/categorias/delete/'.base64_encode($categorias->id))}}" class="btn btn-danger btn-delete">Desactivar
                                				</a>
                                			@endif
                						</td>
                					</tr>
                                @endforeach()
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
@stop

{{-- Page JS --}}
@section('pageJS')
    {{ Html::script('back/js/dashboard/blog/category/home.js') }}
@stop
