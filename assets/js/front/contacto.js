$(document).ready(function () {

	$('#estado').on('change', function(e) {
		e.preventDefault();
		
		var ajaxRoute = $('#ajaxRoute').val();
		var estado = $('#estado').val();

		$('#ciudad').attr('disabled', true);

		$.ajax({
			type       : 'GET',
			data       : {id: estado},
			dataType   : 'json',
			url        : ajaxRoute,
			error      : function (jqXHR) {

				if (jqXHR.status == 422)
				{
					console.log(JSON.parse(jqXHR.responseText));
				}
				else
				{
					console.log('Experimentamos fallas técnicas, intentelo más tarde.');
				}
			},
			success    : function (response) {

				if (response.status == true)
				{

					$('#ciudad').html('');
					$('#ciudad').attr('disabled', false);
					$('#ciudad').html(response.data);
				}
				else
				{
					console.log(response.message);
				}
			}
		});

	});

	$(this).on('submit', 'form', function (e) {
		e.preventDefault();

		$.ajax({
			type       : 'POST',
			data       : $(this).serialize(),
			dataType   : 'json',
			url        : $(this).attr('action'),
			error      : function (jqXHR) {

				if (jqXHR.status == 422)
				{
					modalErrors(JSON.parse(jqXHR.responseText));
				}
				else
				{
					bootbox.alert('Experimentamos fallas técnicas, intentelo más tarde.');
				}
			},
			success    : function (response) {

				if (response.status == true)
				{

					bootbox.alert(response.message);
					$('form')[0].reset();
					
				}
				else
				{
					bootbox.alert(response.message);
				}
			}
		});
	});	
});

/**
 *
 * @param errors array
 */
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

