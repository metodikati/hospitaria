<?php
//Librerías para el envío de mail
include_once('class.phpmailer.php');
include_once('class.smtp.php');
 
$nombre = $_POST['nombreCompleto'];
$FechaNacimiento = $_POST['FechaNacimiento'];
$sexo = $_POST['sexo'];
$edoCivil = $_POST['edoCivil'];
$famResponsable = $_POST['famResponsable'];
$parentesco = $_POST['parentesco'];
$calle = $_POST['calle'];
$colonia = $_POST['colonia'];
$municipio = $_POST['municipio'];
$numExterior = $_POST['numExterior'];
$telefonoCasa = $_POST['telefonoCasa'];
$celular = $_POST['celular'];
$formaPago = $_POST['formaPago'];
$noPoliza = $_POST['noPoliza'];
$tipoAseguradora = $_POST['tipoAseguradora'];
$tipoProcedimiento = $_POST['tipoProcedimiento'];
$especialidadOtro = $_POST['especialidadOtro'];
$especialidadOtro = $_POST['especialidadOtro'];

$archivo1 = $_FILES['archivo1'];
$archivo2 = $_FILES['archivo2'];
$archivo3 = $_FILES['archivo3'];

$para = "hospitaria@futurite.com";
$para1 =  "magaly.lopez@metodika.mx";
$para2 =  "leadsclientes@futurite.com";



//Recibir todos los parámetros del formulario
/*$para1 = "magaly.lopez@metodika.mx";
$para =  "admision@hospitaria.com";
$para2 = "admision2@hospitaria.com";
$para3 = "admision1@hospitaria.com";
$para4 = "mariela.velazquez@hospitaria.com";
$para6 = "fernando.garza@hospitaria.com";
$para7 = "leadsclientes@futurite.com";*/

$asunto = "Pre Registro";//$_POST['asunto'];
$mensaje = "<b>Hospitaria Contacto:</b> .<br>";
$mensaje .= "Nombre Completo: " . $_POST['nombreCompleto'] . ".<br>";
$mensaje .= "Fecha de Nacimiento: " . $_POST['FechaNacimiento'] . ".<br>";
$mensaje .= "Sexo: " . $_POST['sexo'] . ".<br>";
$mensaje .= "Estado Civil: " . $_POST['edoCivil'] . ".<br>";
$mensaje .= "Familiar Responsable: " . $_POST['famResponsable'] . ".<br>";
$mensaje .= "Parentesco: " . $_POST['parentesco'] . ".<br>";
$mensaje .= "Calle: " . $_POST['calle'] . ".<br>";
$mensaje .= "Colonia: " . $_POST['colonia'] . ".<br>";
$mensaje .= "Municipio: " . $_POST['municipio'] . ".<br>";
$mensaje .= "Número Exterior: " . $_POST['numExterior'] . ".<br>";
$mensaje .= "Teléfono de Casa: " . $_POST['telefonoCasa'] . ".<br>";
$mensaje .= "Número de Celular: " . $_POST['celular'] . ".<br>";

if (empty($tipoAseguradora)) {  
    $mensaje .= "Forma de Pago: " . $_POST['formaPago'] . ".<br>";
    }  else { 
    $mensaje .= "Aseguradora: " . $_POST['tipoAseguradora'] . ".<br>";
    $mensaje .= "Número de Poliza: " . $_POST['noPoliza'] . ".<br>";
}

/*$mensaje .= "Forma de Pago: " . $_POST['formaPago'] . ".<br>";
$mensaje .= "Número de Poliza: " . $_POST['noPoliza'] . ".<br>";
$mensaje .= "Aseguradora: " . $_POST['tipoAseguradora'] . ".<br>";*/
if (empty($especialidadOtro)) {  
    $mensaje .= "Tipo Procedimiento: " . $_POST['tipoProcedimiento'] . ".<br>";
    }  else { 
    $mensaje .= "Tipo Procedimiento: " . $_POST['especialidadOtro'] . ".<br>";
}
/*
$mensaje .= "Procedimiento: " . $_POST['tipoProcedimiento'] . ".<br>";
$mensaje .= "Especialidad: " . $_POST['especialidadOtro'] . ".<br>";*/

$mail = new PHPMailer();

//Agregar destinatario
$mail->AddAddress($para);
$mail->AddBCC($para2);

/*$mail->AddCC($para2);
$mail->AddCC($para3);
$mail->AddCC($para4);
$mail->AddCC($para5);
$mail->AddCC($para6);
$mail->AddCC($para7);*/

$mail->Subject = $asunto;
$mail->Body = $mensaje;

/*$uploads_dir = '/assets/img/uploads';
move_uploaded_file($tmp_name, "$uploads_dir/$name");
move_uploaded_file($_FILES['file']['name'], $move);*/

move_uploaded_file($_FILES['archivo1']['tmp_name'], "assets/img/uploads/".$_FILES['archivo1']['name']);
move_uploaded_file($_FILES['archivo2']['tmp_name'], "assets/img/uploads/".$_FILES['archivo2']['name']);
move_uploaded_file($_FILES['archivo3']['tmp_name'], "assets/img/uploads/".$_FILES['archivo3']['name']);

$file1 = "assets/img/uploads/".$_FILES['archivo1']['name'];
$file2 = "assets/img/uploads/".$_FILES['archivo2']['name'];
$file3 = "assets/img/uploads/".$_FILES['archivo3']['name'];

/*$file1 = $_FILES['archivo1']['name'];
$file2 = $_FILES['archivo2']['name'];
$file3 = $_FILES['archivo3']['name'];*/

$mail->AddAttachment( $file1, 'ife.png' );
$mail->AddAttachment( $file2, 'cotizacion.png' );
$mail->AddAttachment( $file3, 'caratula-poliza.png' );


//$file = "assets/img/admision/banner.jpg";
//$mail->AddAttachment( $file, 'ife.png' );

$mail->MsgHTML($mensaje);


//Avisar si fue enviado o no y dirigir al index
if($mail->Send())
{
    echo'<script type="text/javascript">
            alert("Enviado Correctamente");
            window.location="gracias.php"
         </script>';
}
else{
    echo'<script type="text/javascript">
            alert("NO ENVIADO, intentar de nuevo");
            window.location="admision.php"
         </script>';
}
?>