@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
    Reporte de contactos recibidos
@stop

{{-- Content Title --}}
@section('contentTitle')
    Reporte de contactos recibidos
@stop

{{-- Page Top Button --}}
@section('pageTopButton')
<!--<a href="{{URL::to('cms/dashboard/product/vinyl/create')}}" class="btn btn-info"><i class="icofont icofont-plus-circle"></i> Nuevo Vinil</a>-->
@stop

{{-- Main Content --}}
@section('mainContent')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Tabla de Contactos recibidos desde el sitio web</h5>
            </div>

             <div class="col-md-12">
                 <br>
                <table border="0" cellspacing="5" cellpadding="5">
                    <tr>
                        <td>Fecha de inicio:</td>
                        <td><input type="text" id="min" name="min" placeholder=""></td>
                        <td>Fecha final:</td>
                        <td><input type="text" id="max" name="max" placeholder=""></td>
                    </tr>
                </table>
            </div>

            <div class="card-block">
                <div class="dt-responsive table-responsive">
                    <table id="simple_table2" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Email</th>
                                <th>Mensaje</th>
                                <th>Fecha de Alta</th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach($emails as $email)
                        <tr>
                            <td>{{$email->id}}</td>
                            <td>{{$email->name}}</td>
                            <td>{{$email->last_name}}</td>
                            <td>{{$email->email}}</td>
                            <td>{{$email->message}}</td>
                            <td>{{$email->created_at->format('d/m/Y')}}</td>
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

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js">

{{ Html::script('back/js/simple-catalog.js')  }}
{{ Html::script('back/js/report/contact_receive/index.js')  }}
@stop