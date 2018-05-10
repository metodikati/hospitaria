var WIDTH_SCREEN = 0;

$(document).ready(function () {





    $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '< Ant',
        nextText: 'Sig >',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['es']);
    $(function () {
        $( "#min" ).datepicker({ dateFormat: 'dd/mm/yy' });
        $( "#max" ).datepicker({ dateFormat: 'dd/mm/yy' });
    });







    WIDTH_SCREEN = $(".page-header").width();


    //Traemos la informacion en formato json para despues iterarlo
    var values = $("#values_graph").text();
    values = values.substring(0, values.length - 1);
    values = JSON.parse(values);


    console.log(values);

    //Iteramos el json y lo pasamos a un array
    var dates = [];
    var vals = [];
    for(var x in values){
        dates.push(values[x].label);
        vals.push(values[x].y);
    }

    console.log(dates);
    console.log(values);


    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: dates,
            datasets: [{
                label: "Formas de contacto recibidas",
                backgroundColor: 'transparent',
                borderColor: 'rgb(41, 43, 44)',
                data: values,
                lineTension: .3,
                pointRadius: 3,
                pointBorderWidth: 3,
                pointHoverBorderWidth: 3,
                pointHoverBorderColor: 'rgb(41, 43, 44)',
                pointBackgroundColor: 'rgb(41, 43, 44)',
            }]
        },

        // Configuration options go here
        options: {}
    });


    $(this).on("click", "#actualizar_grafica_fechas", function (e) {
        e.preventDefault();

        var local_url    = $("#local_url").val();
        var fecha_inicio = $("#min").val();
        var fecha_final  = $("#max").val();

        if(fecha_inicio != "" && fecha_final != "") {

            window.location.href = local_url + "/" + fecha_inicio + "/" + fecha_final;

        }else{

            swal({
                title: 'Mensaje',
                text: "Selecciona una Fecha de inicio y una Fecha final",
                type: "error",
                confirmButtonText: "Aceptar",
            }, function() {
            });

        }

    });


});


