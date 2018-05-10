$(document).ready(function () {
	/** Initializing main tables in the simple-catalog **/
	$('#simple_table').DataTable({
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

	/** submit each form **/
	$(this).on('submit', 'form', function (e) {
		e.preventDefault();

		$.ajax({
			type       : 'POST',
			data       : $(this).serialize(),
			dataType   : 'json',
			url        : $(this).attr('action'),
			beforeSend : function () {
				blockForm();
			},
			error      : function (jqXHR) {
				unblockForm();

				if (jqXHR.status == 422)
				{
					modalErrors(JSON.parse(jqXHR.responseText));
				}
				else
				{
					swal({
                        title: '¡Atención!',
                        text: 'Experimentamos fallas técnicas, intentelo más tarde.',
                        type: "error",
                        showCancelButton: false,
                        confirmButtonText: "Aceptar",
                        closeOnConfirm: false
                    });
				}
			},
			success    : function (response) {
				unblockForm();

				if (response.status == true)
				{

					swal({
						title: '¡Excelente!',
						text: response.message,
						type: "success",
						showCancelButton: false,
						confirmButtonText: "Aceptar",
						closeOnConfirm: false
					}, function() {
						window.location = response.route;	
					});
					
				}
				else
				{
					swal({
                        title: '¡Atención!',
                        text: response.message,
                        type: "warning",
                        showCancelButton: false,
                        confirmButtonText: "Aceptar",
                        closeOnConfirm: false
                    });
				}
			}
		});
	});

	/** Delete element */
	$(this).on('click', '.btnDelete', function (e) {
		e.preventDefault();
		var route = $(this).attr('href');
		var element = $(this).attr('data-name');

		swal({
			title: "¿Estas seguro de eliminar?",
			text: "¡El borrado será permanente, no podrá deshacer esta acción!",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: "#DD6B55",
			confirmButtonText: "¡Si, eliminarlo!",
			cancelButtonText: "¡No, cancelar!",
			closeOnConfirm: false,
			closeOnCancel: false
		}, function(isConfirm){
			if (isConfirm) {
				$.ajax({
					type       : 'GET',
					dataType   : 'json',
					url        : route,
					beforeSend : function () {
						blockForm();
					},
					error      : function (jqXHR) {

							if (jqXHR.status == 422)
							{
								modalErrors(JSON.parse(jqXHR.responseText));
							}
							else
							{
								swal({
			                        title: '¡Atención!',
			                        text: 'Experimentamos fallas técnicas, intentelo más tarde.',
			                        type: "error",
			                        showCancelButton: false,
			                        confirmButtonText: "Aceptar",
			                        closeOnConfirm: false
			                    });
							}
					},
					success    : function (response) {

							if (response.status == true)
							{
								swal({
									title: 'Eliminado!',
									text: response.message,
									type: "success",
									showCancelButton: false,
									confirmButtonText: "Aceptar",
									closeOnConfirm: false
								}, function() {
									window.location.reload();
								});
							}
							else
							{
								swal({
			                        title: '¡Atención!',
			                        text: response.message,
			                        type: "warning",
			                        showCancelButton: false,
			                        confirmButtonText: "Aceptar",
			                        closeOnConfirm: false
			                    });
							}
					},
				});
			} else {
				modalMessage("¡Cancelado!", "No se realizará la eliminación", "error");
			}
		});
	});
});