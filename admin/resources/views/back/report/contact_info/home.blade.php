@extends('back.layout.dashboard')

{{-- Page Title --}}
@section('pageTitle')
    Reporte de Forma de Contacto
@stop

{{-- Content Title --}}
@section('contentTitle')
    Reporte de Forma de Contacto
@stop

{{-- Page Top Button --}}
@section('pageTopButton')
    <!--<a href="{{URL::to('cms/dashboard/catalog/brand/create')}}" class="btn btn-info"><i class="icofont icofont-plus-circle"></i> Nueva marca</a>-->
@stop

{{-- Main Content --}}
@section('mainContent')
    <div class="row">
        <div class="col-md-12">

            <div id="values_graph" style="display: none;" >{{ print_r($dates) }}</div>
            <input value="{{ url('admin/dashboard/grafica_contactos_recibidos') }}" type="hidden" id="local_url" />

            <div class="col-md-12">
                <br>
                <table border="0" cellspacing="5" cellpadding="5">
                    <tr>
                        <td>Fecha de inicio:</td>
                        <td><input type="text" id="min" name="min" placeholder="" value="{{ $start_date }}"></td>
                        <td>Fecha final:</td>
                        <td><input type="text" id="max" name="max" placeholder="" value="{{ $end_date }}"></td>
                        <td><a href="#" class="btn btn-info" id="actualizar_grafica_fechas"><i class="icofont icofont-refresh"></i> Actualizar</a></td>
                    </tr>
                </table>
            </div>

            <br>

            <canvas id="myChart"></canvas>

        </div>
    </div>
@stop

{{-- Page JS --}}
@section('pageJS')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    {{ Html::script('back/js/report/contact_form/index.js')  }}
@stop