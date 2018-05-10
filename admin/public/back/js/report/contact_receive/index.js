$(document).ready(function () {

    $( "#min" ).datepicker({ dateFormat: 'dd/mm/yy' });
    $( "#max" ).datepicker({ dateFormat: 'dd/mm/yy' });



    $.fn.dataTable.ext.search.push(
        function( settings, data, dataIndex ) {

            var min = convert_string_to_date( $('#min').val() );
            var max = convert_string_to_date( $('#max').val() );
            var date_table = convert_string_to_date( data[5] );

            if(!isNaN(min) && !isNaN(max)){
                if(date_table >= min && date_table <= max){
                    return true;
                }else{
                    return false;
                }
            }else{
                return true;
            }



        }
    );


    $('#simple_table2').DataTable({
        dom: 'Bfrtip',
        buttons: [
            // {
            //     extend: 'pdfHtml5',
            //     customize: function(doc) {
            //         doc.defaultStyle.fontSize = 6;
            //         doc.styles.tableHeader.fontSize = 6;
            //     }
            // },
            {
                extend: 'excel',
            }
        ],
        language: {
            processing:     "Procesando...",
            search:         "Buscar:",
            lengthMenu:     "Ver _MENU_ registros por página",
            info:           "Viendo los registros del _START_ al _END_, de un total de _TOTAL_.",
            infoEmpty:      "No se encuentran registros para mostrar.",
            infoFiltered:   "(_MAX_ registros filtrados)",
            infoPostFix:    "",
            loadingRecords: "Cargando registros...",
            zeroRecords:    "No hay datos para mostrar",
            emptyTable:     "No hay datos disponibles en la tabla",
            paginate: {
                first:      "Primero",
                previous:   "Anterior",
                next:       "Siguiente",
                last:       "Último"
            },
            aria: {
                sortAscending:  ": activar la columna para ordenar ascendente",
                sortDescending: ": activar la columna para ordenar descendente"
            }
        }
    });


    var table = $('#simple_table2').DataTable();
    $(this).on("change", '#min, #max', function() {
        table.draw();
    });

});



function convert_string_to_date(date) {

    //15/08/2017

    date = date.split("/");
    return new Date(date[1]+"/"+date[0]+"/"+date[2]);

}