<?php
session_start();
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
} else {
    header('Location');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">  
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Quienes Somos - Tecno Movil</title>
</head>
<body>
   <!--  BARRA DE INICIO -->
   <header>

<nav class="navbar navbar-expand-lg navbar-light ">
<a href="index"><img src="img/LOGO.png" alt="logotipo" class="logo"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="barradeinicio">
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
<div class="navbar-nav ml-auto">
<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
<li class="nav-item active">
<a class="nav-link" href="index">INICIO <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item active">
<a class="nav-link" href="productos">PRODUCTOS <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="ayuda" tabindex="-1" aria-disabled="true">AYUDA</a>
</li>
<li>
<a class="fas fa-shopping-cart black"  href= "carrito" ></a>
</li>
<li class="nav-item">
<a class="nav-link" href="login" tabindex="-1" aria-disabled="true"><img src="img/usuario.png" alt="" width="25px"></a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"></strong><?= isset($usuario['nombre']) ? $usuario['nombre'] : '' ?></a>
<div class="dropdown-menu">
<a class="dropdown-item"  href="miperfil">Mi Perfil</a>
</a><form action="index" method="post"> <input type='submit' a class="dropdown-item" name='salir' value='Salir' />
</form>
</div>
</ul>       
</div>
</div>
</nav>
</div>
</header>
<!--  Seccion -->
<section>
<div class="form-row">
    <div class="form-group col-md-12">
        <img id="conocea" src="img/conoce a.png" alt="conoce" width="60%">
        <br>
        <br>
        <h1 class="quienessomos">QUIÉNES SOMOS</h1>
        <h2 class="quienessomos1">Tecno Movil es una empresa fundada en el año 2019 dedicada a la comercialización de celulares.
            Nuestros sólidos conocimientos en la materia garantizan la provisión de productos de última tecnología
            y óptima calidad.
        </div>
        <div class="form-group col-md-12">
            <img src="img/local.jpg" alt="" width="100%"> 
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <img src="img/mision.png" alt="mision" width="30%">
            <br>
            <br>
            <h1>MISIÓN</h1><br>
            <p> Somos una empresa de comercialización de productos y servicios en el área de telefonía móvil, confiable, 
                eficiente y ética; orientada a satisfacer satisfacer al cliente brindándole productos de la mayor 
                calidad y al mejor precio.</p> 
                <br>
            </div>    
            <div class="form-group col-md-4"> 
                <br><br>
                <img src="img/vision.png" alt="vision" width="30%">
                <br><br>
               
                <h1>VISIÓN</h1><br>
                <p> Ser para el año 2025, líder en la comercialización de productos en el sector de telefonía movil, 
                    satisfaciendo las necesidades de nuestros clientes, accionistas, capital humano y sociedad.
                </p>
            </div> 
       
            <div class="form-group col-md-4">
                
                <img src="img/valores.png" alt="valores" width="30%">
                <h1>VALORES</h1> 
                <ul class="quieneslista">
                    <li> <b> Servicio:</b> Cumplimos con nuestros compromisos y nos hacemos responsables de nuestro rendimiento en todas nuestras
                        decisiones y acciones, basándonos en una gran voluntad de servicio por y para nuestros clientes.
                    </li>
                    <br>
                    <li> <b>Innovación y mejora continua:</b> Nos damos cuenta de la importancia de mirar hacia el futuro, por tanto ofrecemos 
                        lo último del mercado para dar un apoyo y servicio óptimo a nuestros clientes.
                    </li>
                    <br>
                    <li>
                        <b>Integridad y Ética:</b> Promovemos un compromiso social y cumplimos nuestra normativa interna.
                    </li>
                    
                </div>

            </div>    

                <div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&height=600&hl=es&q=mitre%20170%2C%20rosario%20santa%20fe+(Mi%20nombre%20de%20egocios)&ie=UTF8&t=&z=17&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/calcular-ruta.html">Calcular Ruta</a></iframe>
                </div>
                <br><br><br>
                
                </div>
            </section>
                
             <!--  BARRA DE PIE DE PAGINA  -->
<footer>
<nav class="navbar navbar-expand-lg navbar-light ">
<a href="index"><img src="img/LOGO.png" alt="logotipo" class="logo"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
<div class="navbar-nav m-auto">
<a class="nav-item nav-link active" href="quienessomos">QuienesSomos<span class="sr-only">(current)</span></a>
<a class="nav-item nav-link active" href="Registrarse">Registrarse <span class="sr-only">(current)</span></a>
<a class="nav-item nav-link active" href="ayuda">Ayuda<span class="sr-only">(current)</span></a>
<!--     <i class="fab fa-twitter"></i>
<i class="fab fa-facebook-f"></i>
-->
</div>
</div>
</nav>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</footer>
        </body>
        </html>