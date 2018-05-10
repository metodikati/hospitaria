$(document).ready(function () {
	$('form').on('submit', function (e) {
		e.preventDefault();
        
		var route = $(this).attr('action');

        $.ajax({
            type: 'post',
            data: $(this).serialize(),
            url: route,
            dataType: 'json',
            beforeSend: function () {
                blockForm();
            },
            error: function (jgXHR) {
                unblockForm();

                if (jgXHR.status == 422)
                {
                    modalErrors(JSON.parse(jgXHR.responseText));
                }
                else
                {
                    errorAlert('Experimentamos fallas técnicas, intentelo más tarde.');
                }
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
/*                    successAlert(response.message);

                    $('form')[0].reset();
                    window.location = response.url;*/
                } else {
                    errorAlert(response.message);
                }
            }
        });
	});
});