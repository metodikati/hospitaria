function formActions(block)
{
    $('input, select, button, a, textarea, checkbox').each(function () {
        $(this).attr('disabled', block);
    });
}

function blockForm()
{
    formActions(true);
}

function unblockForm()
{
    formActions(false);
}

function successAlert(msg)
{
    swal("¡Excelente!", msg, "success");
}

function errorAlert(msg)
{
    swal("¡Ups, aolgo salio mal!", msg, "error");
}

function modalErrors(errors)
{
    var message;

    message = "<p>Haz cometido los siguientes errores:</p><ul>";

    for(var k in errors){

        if (errors[k].length > 1) {
            message += "<li> -- " + errors[k][0] + "</li>";
        } else {
            message += "<li> -- " + errors[k] + "</li>";
        }

    }

    message += "</ul>";

    swal({
        title: "!Ups, algo salio mal!",
        text: message,
        html: true,
        type: 'error'
    });
}