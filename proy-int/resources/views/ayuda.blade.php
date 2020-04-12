<?php 
session_start();

if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
} else {
    header('Location');
}
$erroresPreguntas = [];
$idpreg = 0;
if ($_POST){
    $db = file_get_contents("consulta.json");
    $consulta = json_decode($db, true);
    if(isset($_POST["name"])){
        if( empty($_POST['name']) ) {
            $erroresPreguntas['name'] = "El campo nombre.";
        }
        elseif( strlen($_POST['name']) < 2 ) {
            $erroresPreguntas['name'] = "Que el campo nombre no es valido";
            }
    }
    if( isset($_POST['surname']) ) {
        if( empty($_POST['surname']) ) {
            $erroresPreguntas['surname'] = "El campo apellido.";
        }
        elseif( strlen($_POST['surname']) < 2 ) {
            $erroresPreguntas['surname'] = "Que el campo apellido no es valido";
        }
    }
    if( isset($_POST['email']) ) {
        if( empty($_POST['email']) ) {
            $erroresPreguntas['email'] = "El campo email no es valido ";
        }
        elseif( !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
            $erroresPreguntas['email'] = "El campo emailno es un email válido.";
        }
    }
    if( isset($_POST['consulta']) ) {
        if( empty($_POST['consulta']) ) {
            $erroresPreguntas['consulta'] = "Falta su consulta";
        }
        if(count($erroresPreguntas) == 0){

            if(count($consulta)){
                $idpreg = end($consulta)['id'] +1;
            } 
        
               $consulta[] =[  "nombre" => $_POST["name"],
                                "apellido" => $_POST["surname"],
                                "email" => $_POST["email"],
                                "consulta" => $_POST["consulta"],
                                "id" => $idpreg,
                             ];
               $db = json_encode ($consulta);
        
               file_put_contents("consulta.json", $db);
               header('Location: exito.php');
            }
            } }
        

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
    <title>Preguntas Frecuentes - Tecno Movil</title>
</head>
<body class="preguntasbody">

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
<a class="nav-link dropdown-toggle" data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false"></strong><?= isset($usuario['nombre']) ? $usuario['nombre'] : '' ?></a>
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
<!--  Formas de pago  -->
<section>

<img id="imgpreguntas" src="img/formas de pago.png" alt="consulta" width="50%">
<br>
<div class="errores">

<?php if(count($erroresPreguntas)) : ?>   
                    <img src="img/atencion.png" alt="">      
                    <br><br>        
                    <h1>NO SE PUDO ENVIAR SU CONSULTA, REVISE:</h1><br>
                    <ul>
                        <?php foreach($erroresPreguntas as $errorP): ?>
                            <li><strong><?=$errorP?></strong></li>
                        <?php endforeach;?>
                    </ul>
                <?php endif;?>
            </div>
<br>
<br>
<div class="row">
    <div class="col-md-6">
        <h1 class="preguntasreg"> PAGO EN FORMA ONLINE</h1> 
        <h1 class="preguntasreg">(NO PRESENCIAL)</h1> 
        <br> 
        <br> 
        Plan Ahora 12 20%+ A Través de TODOPAGO
        <br><br><br>
        <h3>Transferencia o depósito bancario.</h3> 
        <br>
        <p> En todos estos casos se toma el mismo precio publicado en nuestra web</p> 
            
        </div>   
        <div class="col-md-6">
            <h1 class="preguntasreg">PAGO EN NUESTRO LOCAL</h1>
            <h1 class="preguntasreg"> (PRESENCIAL)</h1> 
            <br> <br>
            <p> Efectivo, Débito, Transferencia o depósito bancario. En todos estos casos se toma el mismo precio publicado en nuestra web</p>
            <br>
            <h3> TARJETAS DE CRÉDITO</h3> 
            <br>
            <ul>
                <li>
                    <strong>1 cuota</strong> 5% + sobre el precio publicado 
                </li>
                <li>
                    <strong>3 cuotas</strong> 20% + sobre el precio publicado
                </li>
                <li>
                    <strong>6 cuotas</strong> 30% + sobre el precio publicado
                </li>
            </ul>
            <br>
            
        </div>  
        
    </div>    
    </section>    
    <!--  PREGUNTAS  -->
    
    <br>
    <img id="imgpreguntas" src="img/preguntas frecuentes.png" alt="preguntasfrecuentes" width="50%"> 
<br>
<br>
<br>


    <div class="row">
        <div class="col-md-4">
            <h3>¿Los productos se encuentran en stock?</h3> 
            <br>
            <p> Sí, todos los productos publicados se encuentran en existencia en nuestro local. </p>
            <br>
            <h3>¿Hacen envíos?</h3> 
            <br>
            <p> Sí, por medio de Transporte de carga, Bus, Oca, Correo Argentino, o por donde elija o más le convenga al cliente. El costo del envío lo abona el cliente al recibir el producto en caso de que el servicio lo permita. De lo contrario el cliente lo tendrá que abonar previamente.</p>
            <h3>¿Cuáles son los horarios de atención?</h3>
            <br>
            <p> Los horarios de atención son de lunes a viernes de 8:30 a 17hs, y sábados de 9 a 12:30hs.</p>
        </div>
        <div class="col-md-4">
            <h3>¿Son precios Finales o más IVA?</h3>
            <br>
            <p> Todos los precios son finales con IVA incluido.</p>
            <br>
            <h3>¿Entregan factura y garantía?</h3> 
            <br>
            <p> En todas las ventas que realizamos se entrega factura electrónica fiscal. Bajo ningún concepto ni excepción realizamos ventas sin factura.  
                La garantía de todos los productos es de 12 meses.</p> 
                <br>
                <h3>¿Hacen factura A? ¿Cómo la solicito?</h3>
                <br>
                <p> Si, por supuesto. En las observaciones del pedido tendrás aclarar que es con factura A y deberás enviar el número de CUIT correspondiente.
                    Para resolver otro tipo de consultas podés comunicarte al correo ventas@digitalhouse.com.ar o a los teléfonos 0341-4823948 / +543401596707 en los horarios de atención al público.</p>
                    
                </div>
                <div class="col-md-4">
                    <h3>¿Puedo ir a local a retirar mi compra personalmente o enviar a alguien?</h3>
                    <br>
                    <p> Sí, podés retirar tu compra personalmente o enviar a alguien. En caso de que la compra este previamente paga, la persona que retire el o los productos, tendrá que brindar los datos del pedido y su DNI (que es el único documento válido) para retirar.</p>
                    <br>
                    <h3>¿Como realizo un pedido?</h3>
                    <br>
                    <p> Para armar un pedido simplemente agregar los productos al carro de compras y al finalizar pones comprar elegís el medio de pago.</p>
                </div>
                
            </div>
            <br>
            
            
         <!--  Formulario  -->   
 
         <img id="imgpreguntas" src="img/envianos tu consulta.png" alt="consulta" width="50%">
          
         
         <form class="formularioregistro" action="" method="post">  
         <input type="hidden" name="submitted" id="submitted" value="1">
                <div class="form-row">
                    <div class="form-group col-md-7 m-auto">
                        <label for="name"> Nombre</label>
                        <input type="name" class="form-control" name="name" id="name" value="<?= isset($_POST['name']) ? $_POST['name'] : '' ?>" placeholder="Nombre">
                    </div>
                    
                    <div class="form-group col-md-7 m-auto">
                        <label for="apellido"> Apellido</label>
                        <input type="apellido" class="form-control" name="surname" value="<?= isset($_POST['surname']) ? $_POST['surname'] : '' ?>"  id="surname" placeholder="Apellido">
                    </div>
                    <div class="form-group col-md-7 m-auto">
                        <label for="inputEmail4"> Email</label>
                        <input type="email" class="form-control" name="email" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>"  id="inputEmail4" placeholder="Email">
                    </div>
                    <br>
                    <div class="form-group col-md-7 m-auto ">
                            <label for="exampleFormControlTextarea1">Envianos tu consulta</label>
                            <textarea class="form-control" name="consulta" value="<?= isset($_POST['consulta']) ? $_POST['consulta'] : '' ?>"  id="exampleFormControlTextarea1" rows="3" cols="80"></textarea>
                          </div>
                  <br><br>
                  
                  
                </div>
              <button type="submit" name="submit" class="boton1">Enviar</button>
            </form>  
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