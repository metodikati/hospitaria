
<?php

include_once('conexion.php');

$db = new Conexion();
$db->query('INSERT INTO `contacts`( `name`, `last_name`, `email`, `message`) VALUES ("'.$_POST['nombre'].'", "'.$_POST['apellidos'].'", "'.$_POST['email'].'", "'.$_POST['comentario'].'")');


$headers = "From: Hospitaria <contacto@futurite.com> \r\n".
			"Reply-To: " . $_POST['email'] . "\r\n".
			"MIME-Version: 1.0\r\n";
			'X-Mailer: PHP/' . phpversion();

//$email_to = "fernando.garza@hospitaria.com, leadsclientes@futurite.com, ing.magalylf@hotmail.com, magaly.lopez@metodika.mx";
$email_to = "hospitaria@futurite.com, leadsclientes@futurite.com";


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
			window.location.href="gracias.php";
		</script>';
			}
	else{
    echo'<script>
			alert("Tu Mensaje no ha enviado Intentelo nuevamente");
			window.location.href="contacto.php";
		</script>';
	}


?>