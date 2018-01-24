<!DOCTYPE html>
<html lang="es" ng-app="MetodikaTI">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Contacto en Hospitaria buscamos cumplir con los más altos estándares de calidad">
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
       HOSPITARIA -Contacto
    </title>

    <!-- Preloader -->
    <link href="assets/css/preloader.css" rel="stylesheet" />

    <script src="assets/js/preloader.js"></script>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- CSS -->
    <link href="assets/css/main.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- AngularJS -->
    <script src="app/app.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <?php include_once('src/partial/seo/analytics.php'); ?>
</head>

<body>
<!-- Preloader -->

<!-- All page content goes inside this div -->

    <!-- Page header section -->
    <?php include_once('src/partial/header.php'); ?>

<!------------------------Inicia la Parte del Banner-------------->
    <div class="home_slider1">             
        <div class="sec1-contactos">
            <div class="container">
                <div class="especialidad-contacto">
                    <div class="col-sm-6 col-sm-offset-2">
                        <span>Contacto</span>
                        <h1><span class="especialidad1">
                            Sabemos que tienes algo que decir, por eso <b>ponemos a tu disposición el siguiente formulario de contacto</b>
                        </span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!------------------------SEC1-------------->

    <div class="container"><br>
       <div class="col-sm-8 col-md-8  col-sm-offset-1">
          <span class="sec1-lineaCirujia">Contacto<hr></span>
       </div>
    </div>
    <div class="container contactonuevo">
        <form action="send.php" method="post" name="contacto" id ="contacto" > 
            <div class="container-fluid">
                <div class="col-sm-10 col-md-10 col-sm-offset-2">
                    <div class="col-sm-10 col-md-10">
                        <span class="contacto-titulo"> <p><span class="envia">Envíanos </span>un mensaje </p> </span>
                    </div>
                    <div class="col-sm-10 col-md-10">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre *" required>
                    </div>
                    <div class="col-sm-10 col-md-10">
                        <input type="text" class="form-control" name="apellidos" placeholder="Apellidos *" required>
                    </div>
                    <div class="col-sm-10 col-md-10">
                        <input type="text" id="email" class="form-control" name="email" placeholder="Correo Electronico*" required>
                    </div>
                    <div class="col-sm-10 col-md-10">
                        <input type="text" name="comentario" class="form-control"  placeholder="Mensaje">
                    </div>
                    <div class="col-sm-10 col-md-10">
                        <p></p>
                        <span class="color-texto">
                            * Campos Obligatorios
                        </span>
                    </div>
                    <div class="col-sm-2 col-sm-offset-8">
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="container">
        <div class="mapa-tamaño  col-sm-offset-1">
            <div id="map" class="map"></div> 
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
</body>
</html>
  <script>
      function initMap() {
        var uluru = {
            lat: 25.766565, 
            lng: -100.307495
        };
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });

        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNHj0fqYhnmqCGpJxIQzqJAmxxUXDxJS4&callback=initMap">
    </script>
<!--
*
*Autor -Magaly de Jesus 
*ing.magalylf@hotmail.com
*
*
-->