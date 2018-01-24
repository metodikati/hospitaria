$(document).ready(function () {

    //sweetAlert('Todo mal', 'error');

    $('form').on('submit', function (e) {
        e.preventDefault();

        $('html').css('cursor', 'wait');

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
            error      : function (jqXHR) {

                if (jqXHR.status == 422)
                {
                    modalErrors(JSON.parse(jqXHR.responseText));
                    $('html').css('cursor', 'default');
                }
                else
                {
                    bootbox.alert("Experimentamos fallas técnicas, intentelo más tarde.");
                    $('html').css('cursor', 'default');
                }
            },
            success    : function (response) {

                if (response.status == true)
                {

                    bootbox.alert(response.message);
                    $('html').css('cursor', 'default');
                    //window.location = response.route;  
                    $('form')[0].reset();                     
                }
                else
                {
                    bootbox.alert(response.message);
                    $('html').css('cursor', 'default');
                }
            }        
        });
    });
});

function modalErrors(errors)
{
    var message;

    //message = "<h4>¡Error!</h4><p>Haz cometido los siguientes errores:</p><ul>";
    var title = 'Haz cometido los siguientes errores:';
    var message = "<ul>";

    for(var k in errors){
        message += "<li>" + errors[k] + "</li>";
    }

    message += "</ul>";

    bootbox.alert(message);
}
