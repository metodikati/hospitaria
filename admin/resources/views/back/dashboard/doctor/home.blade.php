@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
  Doctores
@endsection

{{-- Content Title --}}
@section('contentTitle')
    Doctores
@stop

{{-- Page Top Button --}}
@section('pageTopButton')
    <a href="{{URL::to(Config::get('app.base_url_admin').'/doctores/create')}}" class="btn btn-info"><i class="icofont icofont-plus-circle"></i>Agregue a un Doctor</a>
@stop

{{-- Main Content --}}
@section('mainContent')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Doctores</h5> 
                </div>
                <div class="dt-responsive table-responsive"> 
                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                            <thead>
                             <tr>
                                 <th  data-type="html">No.</th>
                                 <th  data-type="html">Especialidad</th>
                                 <th  data-type="html">Nombre</th>
                                 <th  data-type="html">Email</th>
                                 <th  data-type="html">Consultorio</th>
                                 <th  data-type="html">Telefono</th>
                                 <th  data-type="html"></th>
                             </tr>
                            </thead>

                            <tbody>
                                @foreach($doctors as $doctors)
                					<tr>
                						<td>{{$centinel++}}</td>
                            <td>{{$doctors->specialties->name}}</td>
                						<td>{{$doctors->name}}</td>
                						<td>{{$doctors->email}}</td>
                						<td>{{$doctors->consulting_room}}</td>
                						<td>{{$doctors->phone}}</td>
                						<td>
                							 <a href="{{URL::to(Config::get('app.base_url_admin').'/doctores/edit/'.base64_encode($doctors->id))}}" class="btn btn-warning">Editar
                							 </a>
                                <a href="{{URL::to(Config::get('app.base_url_admin').'/doctores/delete/'.base64_encode($doctors->id))}}" class="btn btn-danger btn-delete">Borrar
                                </a>
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
