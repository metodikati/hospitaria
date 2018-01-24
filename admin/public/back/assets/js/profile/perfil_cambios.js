$(document).ready(function() {

 
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

		/*var param = {
			form    : 'form',
			success : function() {

				window.location = asset() + "sistema/perfil";

			}
		}*/

		$.ajax({
			type       : "POST",
			url        : asset() + "sistema/perfil/editar",
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


		//ajax(param);
	});


	getData();


});


function getData(){
	var id = $("#id").val();
	var data = {};
	data.id = id;
	$.ajax({
		url: asset() + "sistema/perfil/editar_getData",
		type: "GET",
		dataType: "JSON",
		data: data,
		error: function(e){
			console.log(e);
		},
		success: function(result){

				$("#nombre").val(result.name);

				var permisos = result.permits;
				permisos = permisos.replace("{","");
				permisos = permisos.replace("}","");
				//permisos = permisos.replace('"',"");
				permisos = permisos.split(",");

				for(var i = 0; i < permisos.length; i++){
					permisos[i] = permisos[i].split(":");
					permisos[i][0] = permisos[i][0].replace('"', "");
					permisos[i][0] = permisos[i][0].replace('"', "");
				}

				for(var i = 0; i < permisos.length; i++){
					//console.log(permisos[i][0]);
					checkInputs(permisos[i][0], permisos[i][1]);
				}



				//console.log(permisos);

		}
	});


}


function checkInputs(id, permisos){
 
	if(permisos == 1){ // vista
		$('.read-'+id).prop('checked', true);
	}else if(permisos == 3){ //vista - alta
		$('.read-'+id).prop('checked', true);
		$('.create-'+id).prop('checked', true);
	}else if(permisos == 5){ //vista - cambios
		$('.read-'+id).prop('checked', true);
		$('.update-'+id).prop('checked', true);
	}else if(permisos == 9){//vista - baja
		$('.read-'+id).prop('checked', true);
		$('.delete-'+id).prop('checked', true);
	}


	else if(permisos == 2){//vista - baja
		$('.create-'+id).prop('checked', true);
	}
	else if(permisos == 4){//vista - baja
		$('.update-'+id).prop('checked', true);
	}

	else if(permisos == 6){ //alta - cambios
		$('.create-'+id).prop('checked', true);
		$('.update-'+id).prop('checked', true);
	}else if(permisos == 10){ //alta - baja
		$('.create-'+id).prop('checked', true);
		$('.delete-'+id).prop('checked', true);
	}

	else if(permisos == 12){ //cambios - baja
		$('.update-'+id).prop('checked', true);
		$('.delete-'+id).prop('checked', true);
	}

	else if(permisos == 8){ //cambios - baja
		$('.delete-'+id).prop('checked', true);
	}

	else if(permisos == 7){ //vista - alta - cambios
		$('.read-'+id).prop('checked', true);
		$('.create-'+id).prop('checked', true);
		$('.update-'+id).prop('checked', true);
	}

	else if(permisos == 11){ //vista - alta - baja
		$('.read-'+id).prop('checked', true);
		$('.create-'+id).prop('checked', true);
		$('.delete-'+id).prop('checked', true);
	}

	else if(permisos == 13){ //vista - cambios - baja
		$('.read-'+id).prop('checked', true);
		$('.update-'+id).prop('checked', true);
		$('.delete-'+id).prop('checked', true);
	}

	else if(permisos == 15){ //vista - create - baja - cambios
		$('.read-'+id).prop('checked', true);
		$('.create-'+id).prop('checked', true);
		$('.delete-'+id).prop('checked', true);
		$('.update-'+id).prop('checked', true);
	}

	else if(permisos == 14){ //create - baja - cambios
		$('.create-'+id).prop('checked', true);
		$('.delete-'+id).prop('checked', true);
		$('.update-'+id).prop('checked', true);
	}




	$('.update#2').prop('checked', true);

}


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