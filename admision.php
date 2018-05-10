<?php
//Variable que contendrá el número de resgistros encontrados
$registros = '';
if($_POST){
    
  $busqueda = trim($_POST['buscar']);

  $entero = 0;
}
?>
<?php error_reporting(0);
include_once("partial/header.php");  
include_once("consultas.php"); 
$_dato = new Consultas(); 
$dato = $_dato->consultaEspecialidad();
?>
<!DOCTYPE html>
<html lang="es" ng-app="MetodikaTI">
<head>
    <meta charset="utf-8">
    <meta name="description" content="En Hospitaria, queremos que nuestros pacientes se sientan en casa y que reciban la mejor atención médica en las instalaciones más modernas.">
    <meta name="keywords" content="En Hospitaria, queremos que nuestros pacientes se sientan en casa y que reciban la mejor atención médica en las instalaciones más modernas.">
    <meta name="author" content="Todo esto dentro de un marco ético que busque el bien común y
maximice el desarrollo social de la zona.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- SEO Metatags --> 
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Metodikat TI">

    <!-- Structured data -->
    <?php include_once('src/partial/seo/structured-data.php'); ?>

    <!-- Googlebot -->
    <?php include_once('src/partial/seo/googlebot.php'); ?>

    <!-- Facebook Pixel Code -->
    <?php include_once('src/partial/seo/fb-pixel.php'); ?>

    <!-- Title -->
    <title>HOSPITARIA -Admisión</title>

    <!-- Preloader -->
    <link href="assets/css/preloader.css" rel="stylesheet" />

    <script src="assets/js/preloader.js"></script>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- CSS -->
    <link href="assets/css/main.min.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- AngularJS -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.2/angular.min.js"></script>
    <script src="app/app.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <?php include_once('src/partial/seo/analytics.php'); ?>
    <!--Start Redes Sociales-->
    <script type="application/ld+json">
    {
        "@context" : "http://schema.org",
        "@type" : "Organization",
        "name" : "Hospitaria",
        "url" : "https://www.hospitaria.com/",
        "sameAs" : [
        "https://plus.google.com/+Hospitaria"
        ]
    }
    </script>
     <!--End Redes Sociales-->
</head>

<body>
<!-- Preloader -->

<!-- All page content goes inside this div -->

    <!-- Page header section -->
    <?php include_once('src/partial/header.php'); ?>

<!------------------------Inicia la Parte del Banner-------------->
    <div class="sec1-admision">
        <div class="container">
            <div class="admision-contacto">
                <div class="col-sm-12 tituloFormulario">
                    <!--<p>Admisión y Aseguradoras</p>-->
                    <p>Admisión y Aseguradoras</p>
                </div>
            </div>
        </div>
    </div> 
 <!------------------------------------------------------>
 <div class="sec2Check">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 pd0">
                <div class="col-sm-2 col-xs-2 pd0">
                    <img src="assets/img/home/cuadro-chico-gris-gpc.jpg" class="img-responsive" alt="Cuadro-Gris">
                </div>
                <div class="sec2-chec">
                    <div class="col-sm-6 pd0">
                        <span class="sec1-lineaCirujia">Admisión<hr></span>
                        <span class="titulo"><span class="tituloCirujia">Admisión</span> y Aseguradoras</span>
                        <div class="instalacionesEspacio">
                            <span class="parrafo-check">
                                <p>
                                    En Hospitaria, queremos que nuestros pacientes se sientan en casa y que reciban la mejor atención médica en las instalaciones más modernas.
                                </p>
                                <p>
                                    A continuación ponemos a disposición de nuestros clientes la siguiente guía de admisión, en donde encontrarán información útil con respecto a nuestros servicios y su estancia en Hospitaria. 
                                </p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Ingreso-->
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-xs-10 fondoShowDiv">
                <p class="subtitleShow hiddenDegree cursor_on" curren-p="1"><b>INGRESO</b></p>
            </div>
            <div class="col-md-1 col-xs-2 fondoShowDiv">
                <p class="subtitleShow hiddenDegree cursor_on" curren-p="1"><b> +</b></p>
            </div>
        </div>
        <div class="hiddenDiv div_box_show" current-div="1">
            <div class="col-sm-10"><br>
                <ul>
                    <li>
                        Al ser paciente particular, el paquete contratado deberá ser cubierto en su totalidad para poder tramitar el ingreso.
                    </li>
                    <li>
                        De llegar por el área de urgencias, un anticipo a la cuenta deberá estar cubierto en un 70%, de acuerdo a las políticas de Hospitaria.
                    </li>
                    <li>
                        Si el paciente es admitido mediante seguro de gastos médicos y no cuenta con carta de autorización, Hospitaria proporcionará los formatos necesarios para realizar el trámite.
                    </li>
                    <li>
                        Al llenarse los formatos, éstos deberán ser entregados al área de seguros para agilizar la respuesta por parte de la aseguradora.
                    </li>
                    <li>
                        Previo a la recepción de la carta de autorización, se solicitará un depósito de garantía, el cual será devuelto al cierre de la cuenta.
                    </li>
                    <li>
                        Si el paciente requiere admisión a terapia intensiva, los familiares deberán desalojar la habitación inmediatamente y apegarse al reglamento del hospital.
                    </li>
                </ul>
            </div>
        </div>
    </div><br>
<!--Alta-->
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-xs-10 fondoShowDiv">
                <p class="subtitleShow hiddenDegree cursor_on" curren-p="2"><b>ALTA</b></p>
            </div>
            <div class="col-md-1 col-xs-2 fondoShowDiv">
                <p class="subtitleShow hiddenDegree cursor_on" curren-p="2"><b> +</b></p>
            </div>
        </div>
        <div class="hiddenDiv div_box_show" current-div="2">
            <div class="col-sm-10"><br>
                <ul>
                    <li>
                        Después de que el médico determine el alta del paciente, la cuenta deberá ser liquidada en el área de cajas. Al liquidar, el control de la televisión deberá ser entregado.
                    </li>
                    <li>
                        En Hospitaria, recibimos las siguientes formas de pago: efectivo, tarjeta de débito o tarjeta de crédito (no American Express).
                    </li>
                    <li>
                        Si una aseguradora cubrirá los gastos, será necesario que se confirme la procedencia de los gastos por parte del seguro. El tiempo de confirmación depende de cada aseguradora.
                    </li>
                    <li>
                        Las habitaciones deben ser desalojadas a las 11:00 am. De no ser así, se generará un cargo extra automático. 
                    </li>
                    <li>
                        Después de que el cliente liquide el pago, éste podrá adquirir un pase de salida por parte del departamento de cajas, el cual deberá ser entregado en la central de enfermería para recibir indicaciones médicas, resultados de exámenes y medicamentos en caso de aplicar. 
                    </li>
                    <li>
                        Algunos gastos personales y consumo de desechables no están cubiertos por las aseguradoras y deberán ser cubiertos por el paciente. 
                    </li>
                    <li>
                        Las devoluciones de depósitos mayores a $2,000.00 se harán mediante cheque o transferencia bancaria y se procesarán siete días hábiles después del egreso.
                    </li>
                    <li>
                        Las devoluciones menores a $2,000.00 se harán en efectivo. 
                    </li>
                </ul>
            </div>
        </div>
    </div><br>
<!--HORARIO DE VISITA-->
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-xs-10 fondoShowDiv">
                <p class="subtitleShow hiddenDegree cursor_on" curren-p="3"><b>HORARIO DE VISITA</b></p>
            </div>
            <div class="col-md-1 col-xs-2 fondoShowDiv">
                <p class="subtitleShow hiddenDegree cursor_on" curren-p="3"><b> +</b></p>
            </div>
        </div>
        <div class="hiddenDiv div_box_show" current-div="3">
            <div class="col-sm-10"><br>
                <ul>
                    <li>Hospitalización</li>
                        <ul>
                            <li>9:00 horas a 21:00 horas</li>
                        </ul>
                    <li>Unidad de Cuidados Intensivos Neonatales y Pediátricos</li>
                        <ul>
                            <li>El personal de enfermería coordinará los tiempos de estancia con el paciente, quién deberá respetar todas las indicaciones de los mismos. </li>
                        </ul>
                    <li>Unidad de Cuidados Intensivos Adultos</li>
                        <ul>
                            <li>11:00 horas a 12:00 horas</li>
                            <li>17:00 horas a 18:00 horas</li>
                            <li>21:00 horas a 22:00 horas</li>
                            <li>Únicamente un familiar podrá permanecer con el paciente durante la visita.</li>
                        </ul>
                    <li>Cirugía</li>
                        <ul>
                            <li>Únicamente tres familiares podrán permanecer en la sala de espera de cirugía y deberán comunicar a recepción su traslado a otro lugar diferente a los anteriormente mencionados.</li>
                        </ul>
                    <li>Urgencias</li>
                        <ul>
                            <li>Sólo se permitirá a un familiar permanecer junto al paciente. No se permitirá estar en pasillos y se deberán respetar en todo momento las indicaciones del personal. </li>
                        </ul>
                </ul>
            </div>
        </div>
    </div><br>
<!---->
<!--REGLAMENTO HOSPITALARIO-->
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-xs-10 fondoShowDiv">
                <p class="subtitleShow hiddenDegree cursor_on" curren-p="4"><b>REGLAMENTO HOSPITALARIO</b></p>
            </div>
            <div class="col-md-1 col-xs-2 fondoShowDiv">
                <p class="subtitleShow hiddenDegree cursor_on" curren-p="4"><b> +</b></p>
            </div>
        </div>
        <div class="hiddenDiv div_box_show" current-div="4">
            <div class="col-sm-10"><br>
                <p>
                    Por seguridad y comodidad de los pacientes, es necesario que se cumplan con las siguientes normas oficiales:
                </p>
                <ul>
                    <li>
                        Durante la estancia del paciente en Hospitaria, el paciente y sus visitantes deberán dirigirse al personal médico y administrativo con respeto dentro de la institución.
                    </li>
                    <li>
                        Es responsabilidad del paciente y de los visitantes que acudan al hospital con niños, de vigilarlos y asegurarse de que éstos no corran, griten o causen desorden dentro de las instalaciones del hospital. 
                    </li>
                    <li>
                        No se permiten visitas de menores de 15 años de edad en áreas de hospitalización general. Los menores únicamente tendrán acceso al área de maternidad con autorización previa por el área de atención a pacientes. 
                    </li>
                    <li>
                        Únicamente una persona mayor de edad podrá acompañar al paciente durante la noche, a partir de las 21:00 horas. Se le brindará un cobertor para su estadía. 
                    </li>
                    <li>
                        Las instalaciones internas y externas del hospital se consideran áreas libres de humo. Queda prohibido fumar. 
                    </li>
                    <li>
                        Está prohibido introducir alimentos y bebidas de cualquier tipo al hospital. También queda prohibido introducir aparatos eléctricos a las habitaciones.
                    </li>
                    <li>
                        Únicamente se permitirá ingresar alimentos que sean adquiridos en la cafetería de Hospitaria.
                    </li>
                    <li>
                        Los alimentos no pueden permanecer más de dos horas dentro de la habitación, por lo que serán retirados una vez cumplido el tiempo límite. 
                    </li>
                    <li>
                        Está prohibido el acceso de arreglos con flores naturales.
                    </li>
                    <li>
                        La administración, suministro y resguardo de medicamentos es función exclusiva de Hospitaria y el personal de enfermería.
                    </li>
                    <li>
                        El paciente no podrá portar joyas, accesorios, efectivo u objetos de valor, ya que Hospitaria no se hará responsable de no ser depositados en el departamento de admisión al ingresar.
                    </li>
                    <li>
                        En caso de pérdida o daño de algún aparato electrónico o complemento de la habitación, se harán los cargos correspondientes a la cuenta del paciente.
                    </li>
                    <li>
                        Queda prohibido colocar arreglos en la puerta, en lugar o forma diferente al gancho colocado para éste motivo. 
                    </li>
                    <li>
                        Hospitaria no se hace responsable por objetos olvidados en las instalaciones.
                    </li>
                </ul>
            </div>
        </div>
    </div><br>
<!---->
<!--FORMAS DE PAGO-->
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-xs-10 fondoShowDiv">
                <p class="subtitleShow hiddenDegree cursor_on" curren-p="5"><b>FORMAS DE PAGO</b></p>
            </div>
            <div class="col-md-1 col-xs-2 fondoShowDiv">
                <p class="subtitleShow hiddenDegree cursor_on" curren-p="5"><b> +</b></p>
            </div>
        </div>
        <div class="hiddenDiv div_box_show" current-div="5">
            <div class="col-sm-10"><br>
                <ul>
                    <li>Transferencias bancarias</li>
                    <li>Cheques</li>
                    <li>Tarjetas de crédito y débito (Visa y MasterCard)</li>
                    <li>Crédito Alivio Capital</li>
                    <li>Crédito a empresas autorizadas</li>
                    <li>Efectivo</li>
                </ul>
                <p>Conoce nuestras promociones con distintas tarjetas bancarias.</p>
            </div>
        </div>
    </div><br>
<!---->
<!--ASEGURADORAS-->
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-xs-10 fondoShowDiv">
                <p class="subtitleShow hiddenDegree cursor_on" curren-p="6"><b>ASEGURADORAS</b></p>
            </div>
            <div class="col-md-1 col-xs-2 fondoShowDiv">
                <p class="subtitleShow hiddenDegree cursor_on" curren-p="6"><b> +</b></p>
            </div>
        </div>
        <div class="hiddenDiv div_box_show" current-div="6">
            <div class="col-sm-10"><br>
                <p>
                    Para solicitar una programación de cirugía, es necesario reunir la siguiente información:
                </p>
                <ul>
                    <li>Informe médico</li>
                    <li>Formato de aviso o Formato de Reclamante</li>
                    <li>Identificación oficial vigente </li>
                    <li>Credencial de póliza</li>
                    <li>Estudio que confirme el diagnóstico</li>
                </ul>
                <p>
                    Una vez reunida la documentación, ésta debe de ser enviada para solicitar la carta de autorización para realizar el proceso quirúrgico. Posteriormente, el área de seguros de Hospitaria se pondrá en contacto con el paciente para notificar la respuesta que tardará de tres a cinco días hábiles.
                </p>
            </div>
        </div>
    </div>

<!------------------------SEC1-------------->
    <div class="sec1-admisionFormularioN">
        <div class="container">
            <div class="admision-contacto">
                <div class="col-sm-12 tituloFormulario">
                    <!--<p>Admisión y Aseguradoras</p>-->
                    <h1>Pre-registro</h1>
                </div>
                <div class="col-sm-6 col-sm-offset-2 fondo-admision">
                    <form action="sendAdmision.php" method="post" name="admision" id ="admision" enctype="multipart/form-data">  
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-2 col-xs-4 pd0">
                                    <label for="nombre">Nombre Completo</label>
                                </div>
                                <div class="col-sm-3 col-xs-7 pd0">
                                    <input type="text" name="nombreCompleto" class="form-control" required="required"><br>
                                </div>
                                <div class="col-sm-2 col-sm-offset-1 col-xs-4 pd0">
                                    <label for="FechaNac">Fecha de Nacimiento</label>
                                </div>
                                <div class="col-sm-3 col-xs-7 pd0">
                                    <input type="date" name="FechaNacimiento" class="form-control" required="required"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2 col-xs-4 pd0">
                                    <label for="nombre">Sexo</label>
                                </div>
                                <div class="col-sm-3 col-xs-7 pd0">
                                    <select name="sexo" class="form-control">
                                        <option value="">Elige-------------</option>
                                        <option value="masculino">Masculino</option>
                                        <option value="femenino">Femenino</option>
                                    </select> <br>
                                </div>
                                <div class="col-sm-2 col-sm-offset-1 col-xs-4 pd0">
                                    <label for="FechaNac">Estado Civil</label>
                                </div>
                                <div class="col-sm-3 col-xs-7 pd0">
                                    <input type="text" name="edoCivil" class="form-control" required="required"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2 col-xs-4 pd0">
                                    <label for="nombre">Familiar Responsable</label>
                                </div>
                                <div class="col-sm-3 col-xs-7 pd0">
                                    <input type="text" name="famResponsable" class="form-control" required="required"><br>
                                </div>
                                <div class="col-sm-2 col-sm-offset-1 col-xs-4 pd0">
                                    <label for="FechaNac">Parentesco</label>
                                </div>
                                <div class="col-sm-3 col-xs-7 pd0">
                                    <input type="text" name="parentesco" class="form-control" required="required"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2 col-xs-4 pd0">
                                    <label for="nombre">Calle</label>
                                </div>
                                <div class="col-sm-3 col-xs-7 pd0">
                                    <input type="text" name="calle" class="form-control" required="required"><br>
                                </div>
                                <div class="col-sm-2 col-sm-offset-1 col-xs-4 pd0">
                                    <label for="FechaNac">Colonia</label>
                                </div>
                                <div class="col-sm-3 col-xs-7 pd0">
                                    <input type="text" name="colonia" class="form-control" required="required"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2 col-xs-4 pd0">
                                    <label for="nombre">Municipio</label>
                                </div>
                                <div class="col-sm-3 col-xs-7 pd0">
                                    <input type="text" name="municipio" class="form-control" required="required"><br>
                                </div>
                                <div class="col-sm-2 col-sm-offset-1 col-xs-4 pd0">
                                    <label for="FechaNac">Numero Ext.</label>
                                </div>
                                <div class="col-sm-3 col-xs-7 pd0">
                                    <input type="text" name="numExterior" class="form-control" required="required"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2 col-xs-4 pd0">
                                    <label for="nombre">Teléfono de Casa</label>
                                </div>
                                <div class="col-sm-3 col-xs-7 pd0">
                                    <input type="text" name="telefonoCasa" class="form-control" required="required"><br>
                                </div>
                                <div class="col-sm-2 col-sm-offset-1 col-xs-4 pd0">
                                    <label for="FechaNac">Celular</label>
                                </div>
                                <div class="col-sm-3 col-xs-7 pd0">
                                    <input type="text" name="number" class="form-control" required="required"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2 col-xs-4 pd0">
                                    <label for="FechaNac">Forma de Pago</label>
                                </div>
                                <div class="col-sm-3 col-xs-7 pd0">
                                    <div class="dropdown"> 
                                        <select class="form-control" id="colorselector" name="formaPago" required>
                                            <option value="">Elige una Opción</option>
                                            <option value="particular">Particular</option>
                                            <option value="aseguradora">Aseguradora</option>
                                        </select><br>
                                    </div>
                                </div>
                                <!--aqui-->
                                <div class="output">
                                    <div id="aseguradora" class="colors aseguradora">
                                        <div class="col-sm-3 col-sm-offset-1 col-xs-4 pd0">
                                            <input type="text" name="noPoliza" placeholder="Numero de Poliza" class="form-control">
                                        </div>
                                        <div class="col-sm-3 col-xs-7 pd0">
                                            <input type="text" name="tipoAseguradora" class="form-control" placeholder="Aseguradora"><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2 col-xs-4 pd0">
                                    <label for="nombre">Tipo de Procedimiento</label>
                                </div>
                                <div class="col-sm-3 col-xs-7 pd0">
                                     <select id="buscarN" class="form-control" name="tipoProcedimiento" required>
                                            <option value="" >Elige una Opción ...</option>
                                        <?php if ($dato[0] != '' || $dato[0] != null || !empty($dato[0])) {
                                            foreach ($dato as $key => $value) { ?>
                                            
                                            <?php $clase = "sec3-d90".$value['name']; ?>
                                                <div class="col-md-2 col-sm-4 col-xs-6 <?= $clase; ?>">
                                                     <option value="<?= $value['name']; ?>" >
                                                        <?= $value['name']; ?>
                                                     </option>
                                                </div>
                                           <!-- </a> -->
                                           <?php } 
                                        } ?> 
                                        <option value="especialidadOtra">Otra Especialidad</option>
                                        </select>
                                </div>
                                <!--aqui-->
                                <div class="output1">
                                    <div id="especialidadOtra" class="colors-new especialidadOtra">
                                        <div class="col-sm-2 col-sm-offset-1 col-xs-4 pd0">
                                            <label for="FechaNac">Especialidad</label>
                                        </div>
                                        <div class="col-sm-3 col-xs-7 pd0">
                                            <input type="text" name="especialidadOtro" class="form-control"><br>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2 col-xs-4 pd0">
                                    <label for="Telefono">IFE </label>
                                </div>
                                <div class="col-sm-3 col-xs-7 pd0">
                                    <input type="file" name="archivo1" class="form-control"><br>
                                </div>
                                <div class="col-sm-2 col-sm-offset-1 col-xs-4 pd0">
                                    <label for="mail">Cotizacion</label>
                                </div>
                                <div class="col-sm-3 col-xs-7 pd0">
                                    <input type="file" name="archivo2" class="form-control"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2 col-xs-4 pd0">
                                    <label for="Doctor">Caratula de poliza</label>
                                </div>
                                <div class="col-sm-3 col-xs-7 pd0">
                                    <input type="file" name="archivo3" class="form-control"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-4 pd0">
                                    <button type="submit" class="btn btn-danger" name="buscador" id="btn_buscar"> ENVIAR
                                    </button><br><br>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<div class="contacto-admision">
    <div class="container">
        <div class="text1-contacto">
            Deja tu salud en las <b>mejores manos</b>
            <div class="col-sm-4 col-sm-offset-4 col-xs-8 col-xs-offset-2">
                <a href="contacto.php">
                    <img src="assets/img/especialidades/boton.png" class="img-responsive" alt="boton">
                </a>
            </div>

        </div>
    </div>
</div>
<!---->
    <?php include_once('src/partial/footer.php'); ?>

<script src="assets/js/collapseItems.js"></script>
<script src="assets/js/jquery/jquery-3.2.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="assets/lib/bootstrap.min.js"></script>
<!-- Bootbox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
</body>
</html>
<script type="text/javascript">
    $(function() {
        $('#colorselector').change(function(){
            $('.colors').hide();
            $('#' + $(this).val()).show();
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $('#buscarN').change(function(){
            $('.colors-new').hide();
            $('#' + $(this).val()).show();
        });
    });
</script>

<!--
*
*Autor -Magaly de Jesus 
*ing.magalylf@hotmail.com
*
*
-->