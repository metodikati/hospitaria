$(document).ready(function () {
    $('#simpletable').DataTable();

    $('.btn-delete').on('click', function (e) {
    	e.preventDefault();
    	var user = $(this).attr('data-name');

    	var route = $(this).attr('href');

	    swal({
	    	title: '¿Estas seguro?',
	    	text: '¿Deseas eliminar el usuario ' + user + "?",
	    	type: 'warning',
	    	showCancelButton: true,
	  		confirmButtonColor: "#DD6B55",
	  		confirmButtonText: "Sí, borralo",
	  		closeOnConfirm: false
	    }, function () {
	    	$.ajax({
	    		type: 'get',
	    		url: route,
	    		dataType: 'json',
	    		beforeSend: function () {
	    			blockForm();
	    		},
	    		error: function (xqr) {
	    			unblockForm();

	    			errorAlert('Experimentamos fallas técnicas, intentelo más tarde.');

	    			console.log(xqr);
	    		},
	    		success: function (response) {
	    			unblockForm();
console.log(response);
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