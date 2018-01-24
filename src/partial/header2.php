<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-99301331-1', 'auto');
  ga('send', 'pageview');

</script>
<header class="large">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
      <div class="row bg-blue top-header">
        <div class="col-md-12 text-right">
          <span class="menu_menu">¿Una Emergencia? ¡Llámanos! <img src="../assets/img/home/urgencias-reloj-rojo-icon.png" alt="reloj">  <a href="tel:+8140002200"><b>(81) 4000 2200</b></a></span> <div class="col-sm-3 col-xs-10"><br><br>
        </div>
        </div>
      </div>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a href="../index.php">
          <div class="img_menu"></div>
        </a> 
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">

        <li><a href="../index.php">Home</a></li>
        <li><a href="../nosotros.php">Nosotros</a></li>
        <li><a href="../especialidades.php">Especialidades</a></li>
        <li><a href="../servicios-medicos.php">Servicio Médico</a></li>
        <li><a href="../directorio-medico.php">Directorio Médico</a></li>
        <li><a href="../admision.php">Admision</a></li>
 

        <li>
            <span>
                <a href="../contacto.php">
                  <button class="button contacto">CONTACTO</button>
                 </a>
            </span>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.js"></script> 
<script type="text/javascript">
  $(document).on("scroll", function() {

  if($(document).scrollTop()>300) {
    $("header").removeClass("large").addClass("small");
  } else {
    $("header").removeClass("small").addClass("large");
  }
  
});
</script>