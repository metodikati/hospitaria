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
    <meta name="description" content="Directorio en Hospitaria buscamos cumplir con los más altos estándares de calidad">
    <meta name="keywords" content="En Hospitaria queremos mejorar tu calidad de vida cuidando tu salud">
    <meta name="author" content="Todo esto dentro de un marco ético que busque el bien común y
maximice el desarrollo social de la zona.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--link rel="stylesheet" type="text/css" href="assets/fonts/MyriadPro-Regular.otf"-->

  
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
    <title>
       HOSPITARIA- Directorio Medico
    </title>

    <!-- Preloader -->
    <link href="assets/css/preloader.css" rel="stylesheet" />
    <script src="assets/js/preloader.js"></script>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- CSS -->
    <link href="assets/css/main.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/bxslider/jquery.bxslider.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Analytics code -->
    <?php include_once('src/partial/seo/analytics.php'); ?>
</head>

<body>
<!-- Preloader -->

<!-- All page content goes inside this div -->

    <!-- Page header section -->
    <?php include_once('src/partial/header.php'); ?>

<!------------------------Inicia la Parte del Banner-------------->
    <div class="home_slider">             
        <div class="banner-directorio">
            <div class="container">
                <div class="especialidadDirectorio">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="fondo-buscar">
                            <h1>
                                <span class="tituloDirectorio">Directorio Médico</span>
                            </h1>
                            <span class="subtituloDirectorio">
                                <p>¡ Encuentra de la manera más fácil a tu médico por especialidad!</p> 
                            </span>
                            <form id="buscador" name="buscador" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>"> 
                          
                                    <div class="col-sm-8 col-sm-offset-1">

                                        <select id="buscar" class="form-control" required>
                                            <option value="" >Elige una Opción ...</option>
                                        <?php if ($dato[0] != '' || $dato[0] != null || !empty($dato[0])) {
                                            foreach ($dato as $key => $value) { ?>
                                            
                                            <?php $clase = "sec3-d90".$value['id']; ?>
                                                <div class="col-md-2 col-sm-4 col-xs-6 <?= $clase; ?>">
                                                     <option value="<?= $value['id']; ?>" >
                                                        <?= $value['name']; ?>
                                                     </option>
                                                </div>
                                           <!-- </a> -->
                                           <?php } 
                                        } ?> 
                                        </select>
                                    </div>
                                    <div class="col-sm-3 ">
                                        <nav>
                                            <a href="#dos" data-ancla="dos">
                                                <button type="button" class="btn btn-default" name="buscador" id="btn_buscar" onclick="mostrar()"> Buscar
                                                </button>
                                            </a>
                                        </nav>
                                    </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!------------------------SEC1-------------->
    <A name="dos" id="dos"></A>
        <div id='oculto' style='display:none;'>
            <div class="sec1-servMedico"> 
                <A name="uno" id="uno"></A>
                <div class="container-fluid">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="informacion">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="mensaje" style="display: none;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><hr>
                            <button class="btn btn-danger btn-lg" disabled="true">
                                <h3><span class="glyphicon glyphicon-alert"></span> 
                                        Por el momento no hay datos para mostrar</h3>
                            </button>
                         </div>
                   </div>
                </div>   
            </div>
        </div>

   
<!---->
    <?php include_once('src/partial/footer.php'); ?>
<script src="assets/js/jquery/jquery-3.2.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="assets/lib/bootstrap.min.js"></script>
<!-- Bootbox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
<script>

    $('#btn_buscar').click(function(){
var datoabuscar = $('#buscar').val();
        
        //console.log(datoabuscar);
        //alert(datoabuscar);
        if (datoabuscar) {

            $.post("consultas.php", {datoabuscar:datoabuscar, accion:'ejecutarbusqueda'}, function(data){
            if (data.error) {
                console.log(data.error);
                $('#mensaje').show();
            }else if(data.success){
                //alert("Hola mundo");
                $('#informacion').show();
                var datosamostrar = "";
                for(i=0; i < data.success[0].total;){
             
                    datosamostrar += '<div class="col-lg-4 col-md-4 claseborder thumbnail"><div class="claseborder1"><p>'+
                        ' '+data.success[i].nombre+'<br>'+''+data.success[i].correo+'<br>'+''+data.success[i].phone+'<br>'+''+data.success[i].consultorio+'<br>'+'Urgencias: '+''+data.success[i].urgencias+''+
                    '</p></div></div>';
                    i++;
                }
                 $('#informacion').html(datosamostrar);
            }
        }, "json");
        }else{
            alert("Elige una Opción");
             window.location.reload(true);
        }

        
    });

</script>

<script type="text/javascript">
function mostrar(){
document.getElementById('oculto').style.display = 'block';}
</script>
</body>
</html>


<!--
*
*Autor -Magaly de Jesus 
*ing.magalylf@hotmail.com
*
*
-->