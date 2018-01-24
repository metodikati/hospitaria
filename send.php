
<?php


$headers = "From: Hospitaria <contacto@futurite.com> \r\n".
			"Reply-To: " . $_POST['email'] . "\r\n".
			"MIME-Version: 1.0\r\n";
			'X-Mailer: PHP/' . phpversion();

$email_to = "magaly.lopez@metodika.mx, fernando.garza@hospitaria.com, adrian.garza@metodika.mx";



$asunto ="Hospitaria";
$mensaje = "\r\n\r\n";
$mensaje = "Se lleno la forma de contacto con la siguiente información \r\n\r\n\r\n";
$mensaje .= "Nombre: " . $_POST['nombre'].="\r\n";
$mensaje .= "Apellidos: " . $_POST['apellidos'].="\r\n";
$mensaje .= "Email: " . $_POST['email'].="\r\n";
$mensaje .= "Comentario: " . $_POST['comentario'].="\r\n";

if(@mail($email_to, $asunto, $mensaje, $headers))
{
    echo'<script>
			alert("Tu Mensaje se ha enviado");
			window.location.href="contacto.php";
		</script>';
			}
	else{
    echo'<script>
			alert("Tu Mensaje no ha enviado Intentelo nuevamente");
			window.location.href="contacto.php";
		</script>';
	}


?>
