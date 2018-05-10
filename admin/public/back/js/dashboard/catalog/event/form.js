$(document).ready(function () {

	$('#fechaInicio').datepicker({ dateFormat: 'yy-mm-dd' });

	$('#fechaTermino').datepicker({ dateFormat: 'yy-mm-dd' });

	$('form').on('submit', function (e) {
        e.preventDefault();

        var data = new FormData();

        $('form').find(':input').not('#slider').each(function () {
            if ($.trim($(this).val()).length > 0) {
                data.append($(this).attr('name'), $(this).val());
            }
        });

        //Add slider field to FormData
        if ($('#imagen').get(0).files.length > 0) {
            data.append('imagen', $('#imagen')[0].files[0]);
        }

        $.ajax({
            type: 'post',
            data: data,
            url: $(this).attr('action'),
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
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
                } else {
                    errorAlert(response.message);
                }
            }
        });
    });
});
