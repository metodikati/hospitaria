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
$archivo2 = $_FILES['archivo3'];

//Recibir todos los parámetros del formulario
$para = "magaly.lopez@metodika.mx";

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
if (empty($especialidadOtro)) {  
    $mensaje .= "Tipo Procedimiento: " . $_POST['tipoProcedimiento'] . ".<br>";
    }  else { 
    $mensaje .= "Tipo Procedimiento: " . $_POST['especialidadOtro'] . ".<br>";
}

$mail = new PHPMailer();
//Agregar destinatario

$mail->AddBCC($para);
$mail->Subject = $asunto;
$mail->Body = $mensaje;

move_uploaded_file($_FILES['archivo1']['tmp_name'], "assets/img/uploads/".$_FILES['archivo1']['name']);
move_uploaded_file($_FILES['archivo2']['tmp_name'], "assets/img/uploads/".$_FILES['archivo2']['name']);
move_uploaded_file($_FILES['archivo3']['tmp_name'], "assets/img/uploads/".$_FILES['archivo3']['name']);

$file1 = "assets/img/uploads/".$_FILES['archivo1']['name'];
$file2 = "assets/img/uploads/".$_FILES['archivo2']['name'];
$file3 = "assets/img/uploads/".$_FILES['archivo3']['name'];

$mail->AddAttachment( $file1, 'ife.png' );
$mail->AddAttachment( $file2, 'cotizacion.png' );
$mail->AddAttachment( $file3, 'caratula-poliza.png' );
$mail->MsgHTML($mensaje);


 
//Avisar si fue enviado o no y dirigir al index

if($mail->Send())
{
    echo'<script type="text/javascript">
            alert("Enviado Correctamente");
            window.location="http://hospitaria.com/admision.php"
         </script>';
}
else{
    echo'<script type="text/javascript">
            alert("NO ENVIADO, intentar de nuevo");
            window.location="http://hospitaria.com/admision.php"
         </script>';
}
?>