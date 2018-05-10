$(document).ready(function () {
    $('#simpletable').DataTable();

    $('.btn-delete').on('click', function (e) {
    	e.preventDefault();

    	var category = $(this).attr('data-name');

    	var route = $(this).attr('href');

	    swal({
	    	title: '¿Estas seguro?',
	    	text: '¿Deseas eliminar la categoría ' + category + "?",
	    	type: 'warning',
	    	showCancelButton: true,
	  		confirmButtonColor: "#DD6B55",
	  		confirmButtonText: "Sí, borrala",
	  		closeOnConfirm: false
	    }, function () {
	    	$.ajax({
	    		type: 'get',
	    		url: route,
	    		dataType: 'json',
	    		beforeSend: function () {
	    			blockForm();
	    		},
	    		error: function () {
	    			unblockForm();

	    			errorAlert('Experimentamos fallas técnicas, intentelo más tarde.');
	    		},
	    		success: function (response) {
	    			unblockForm();

	    			if (response.status == true) {
	                    swal({
	                    	title: "¡Excelente!",
	                    	text: response.message,
	                    	type: "success",
	                    	showCancelButton: false,
	                    	confirmButtonText: "Aceptar",
	                    	closeOnConfirm: false
	                    }, function () {
	                    	window.location = response.url;
	                    });
	                } else {
	                    errorAlert(response.message);
	                }
	    		}
	    	});
	    });
    });
});