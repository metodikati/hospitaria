@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
  Cotizador
@endsection

{{-- Content Title --}}
@section('contentTitle')
    Cotizador
@stop

{{-- Page Top Button --}}
@section('pageTopButton')
    <a href="{{URL::to(Config::get('app.base_url_admin').'/cotizador/create')}}" class="btn btn-info"><i class="icofont icofont-plus-circle"></i>Cotizador</a>
@stop

{{-- Main Content --}}
@section('mainContent')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Cotizador</h5> 
                </div>
                <div class="dt-responsive table-responsive"> 
					<div class="ibox-content"> 
                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                            <thead>
                             <tr>
                                 <th  data-type="html">No.</th>
                                 <th  data-type="html">categoria</th>
                                 <th  data-type="html">Estudio</th>
                                 <th  data-type="html">Precio</th>
                                 <th>Incluye</th>
                                 <th  data-type="html">No Incluye</th>
                                 <th  data-type="html"></th>
                             </tr>
                            </thead>
							           @foreach($cotizador as $cotizador)
                					<tr>
                						<td>{{$centinel++}}</td>
                						<td>{{$cotizador->cot->estudio}}</td>
                            <td>{{$cotizador->estudio_sub}}</td>
                						<td>${{$cotizador->precio}}</td>
                						<td  width="10%">{{$cotizador->incluye}}</td>
                						<td>{{$cotizador->no_incluye}}</td>
                						<td>
                							 <a href="{{URL::to(Config::get('app.base_url_admin').'/cotizador/edit/'.base64_encode($cotizador->id))}}" class="btn btn-warning">Editar
                							 </a>
                                <a href="{{URL::to(Config::get('app.base_url_admin').'/cotizador/delete/'.base64_encode($cotizador->id))}}" class="btn btn-danger btn-delete">Borrar
                                </a>
                						</td>
                						</tr>
                                @endforeach()
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

