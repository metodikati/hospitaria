$(document).ready(function() {

	/**
	 *
	 *
	 *
	 */
	$(this).on('click', '.select-all', function() {

		//Se chequea los de la fila
		$('.'+$(this).attr('data-id')).each(function() {

			switch ($(this).attr('data-type')) {

				case 'READ':
					chkVista($(this));
					break;

				default:
					chkCheck($(this));

			}

		});

	});

	/**
	 *
	 *
	 *
	 */
	$(this).on('click', '.select-row', function() {

		
		if ($('.'+$(this).attr('data-id')+"-CHK:eq(0)").is(':checked')) {

			chkVista($('.'+$(this).attr('data-id')+"-CHK:eq(0)"));

		} else {

			$('.'+$(this).attr('data-id')+"-CHK").not(':eq(0)').each(function() {

				chkCheck($(this));

			});

		}

	});

	$(this).on('click', '.READ', function(e) {

		if (!$(this).is(':checked')) {
			$('.'+$(this).attr('data-row')+"-CHK").prop('checked', false);
		} 

	});

	$(this).on('submit', 'form', function(e) {
		e.preventDefault();

		var route = $(this).attr('href');

		$.ajax({
			type       : "POST",
			url        : route,
			data       : $(this).serialize(),
			dataType   : "JSON",
			beforeSend : function() {
				blockForm();
			},
			error      : function(xhr, ajaxOptions, throwError) {
   
				//Se desbloquea el formulario
				unblockForm();
				openModal('Experimentamos fallas técnicas, por favor comuniquese con su proveedor', false);

			},
			success    : function(response) {

				console.log(response);
				unblockForm();

				if (response.estatus == false) {

					var error_msg = "";
					for(var k in response.errors) {
						error_msg += response.errors[k][0]+"<br>";
					}					
				 	bootbox.alert(error_msg, function() {				 		
					});

				} else {

				 	bootbox.alert(response.mensaje, function() {
				 		window.location.href = asset() + "sistema/perfil";				 		
					});	

				}

			}

		});


	});




});

/**
 *
 *
 */
function chkVista(element)
{

	if (element.is(':checked')) {

		element.prop('checked', false)
			   .attr('data-status', 0);

		//Se limpia toda la fila
		$('.'+element.attr('data-row')+"-CHK").prop('checked', false);

	} else {

		element.prop('checked', true)
			   .attr('data-status', 1);

	}

}

/**
 *
 *
 *
 */
function chkCheck(element)
{
	if (element.is(':checked')) {

		element.prop('checked', false);

	} else {

		element.prop('checked', true);

		$('.'+element.attr('data-row')+"-CHK:eq(0)").prop('checked', true)
													.attr('data-status', 1);

	}
}