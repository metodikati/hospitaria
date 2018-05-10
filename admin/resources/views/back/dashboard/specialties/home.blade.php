@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
  Especialidades
@endsection

{{-- Content Title --}}
@section('contentTitle')
    Especialidades
@stop

{{-- Page Top Button --}}
@section('pageTopButton')
  <a href="{{URL::to(Config::get('app.base_url_admin').'/especialidades/create')}}" class="btn btn-info"><i class="icofont icofont-plus-circle"></i>Especialidades</a>
@stop

{{-- Main Content --}}
@section('mainContent')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Especialidades</h5> 
                </div>
                <div class="dt-responsive table-responsive"> 
                        <table id="simpletable" class="table table-striped table-bordered nowrap" width="100px">
                            <thead>
                             <tr>
                                 <th  data-type="html">No.</th>
                                 <th  data-type="html">Especialidad</th>
                                 <th  data-type="html">Estatus</th>
                                 <th  data-type="html"></th>
                             </tr>
                            </thead> 

                            <tbody>
                                @foreach($events as $event)
                                    <tr>
                                        <td>{{$centinel++}}</td>
                                        <td>{{$event->name}}</td>
                                        @if($event->estatus != 'Activo')
                                        <td style="color: red"><b>{{$event->estatus}}</b></td>
                                        @else 
                                        <td style="color: #1abc9c"><b>{{$event->estatus}}</b></td>
                                        @endif
                                        <td>
                                            @if($event->estatus != 'Activo')
                                                <a href="{{URL::to(Config::get('app.base_url_admin').'/especialidades/activar/'.base64_encode($event->id))}}" class="btn btn-primary">Activar
                                                </a>
                                            @else   
                                                <a href="{{URL::to(Config::get('app.base_url_admin').'/especialidades/edit/'.base64_encode($event->id))}}" class="btn btn-warning">Editar
                                                </a>
                                                <a href="{{URL::to(Config::get('app.base_url_admin').'/especialidades/delete/'.base64_encode($event->id))}}" class="btn btn-danger btn-delete">Desactivar
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
