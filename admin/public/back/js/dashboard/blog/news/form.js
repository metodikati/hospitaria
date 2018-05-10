$(document).ready(function () {
	$('form').on('submit', function (e) {
        e.preventDefault();

        var data = new FormData();

        $('form').find(':input').not('.images').each(function () {
            if ($.trim($(this).val()).length > 0) {
                data.append($(this).attr('name'), $(this).val());
            }
        });

        //Add slider field to FormData
        if ($('#main_image').get(0).files.length > 0) {
            data.append('main_image', $('#main_image')[0].files[0]);
        }

        //Add slider field to FormData
        if ($('#alt_main_image').get(0).files.length > 0) {
            data.append('alt_main_image', $('#alt_main_image')[0].files[0]);
        }

        //Add slider field to FormData
        if ($('#post_image').get(0).files.length > 0) {
            data.append('post_image', $('#post_image')[0].files[0]);
        }

        //Add slider field to FormData
        if ($('#alt_post_image').get(0).files.length > 0) {
            data.append('alt_post_image', $('#alt_post_image')[0].files[0]);
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
