$(document).ready(function () {

    //sweetAlert('Todo mal', 'error');

    $('form').on('submit', function (e) {
        e.preventDefault();

        var data = new FormData();

        $('form').find(':input').not('#archivo').each(function () {

            if ($.trim($(this).val()).length > 0) {
                //console.log($(this).attr('name') + "=" + $(this).val());

                data.append($(this).attr('name'), $(this).val());
            }
        });

        if ($('#archivo').get(0).files.length == 0) {
            console.log('No tiene archivos');
        } else {
            data.append('archivo', $('#archivo')[0].files[0]);
        }

        for (var pair of data.entries()) {
            console.log(pair[0]+ '= ' + pair[1]);
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
});