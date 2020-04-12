 @include('header')
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
<body>
   
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
            <div class="carousel-item active ">
            <img src="img/diapositiva-01.jpg" class="d-block w-100" alt="1">
            </div>
            <div class="carousel-item">
            <img src="img/diapositiva-03.jpg" class="d-block w-100" alt="2">
            </div>
            <div class="carousel-item">
            <img src="img/diapositiva-04.webp" class="d-block w-100" alt="3">
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
            </div>
        <!--  los mas vendidos  (sacarlos de la base de datos)-->
        <div class="productos-mas-vendidos">
        
        <img class="los-mas-vendidos" width="700px" src="img/los mas vendidos.png" alt="logotipo" class="logo" class="img-fluid">
        
        <div class="row">
        <div class="col-md-6 col-lg-4">
        <a href="producto2.php"><img class="foto"  src="img/apple-iphone-x--1.jpg" alt="Iphone X"></a>
        <img class="oferta" src="img/super sale .png" alt="supersale">
        <a href="producto2.php"><h2>Iphone X 256 gb</h2></a>
        <p class="index">ARS $85.000</p>
        </div>   
        <div class="col-md-6 col-lg-4">
        <a href="producto5.php"><img class="foto" src="img/samsung-galaxy-s9-001.jpg" alt="Samsung s9"></a>
        <img class="oferta" src="img/super sale .png" alt="supersale"> 
        <a href="producto5.php"><h2>Samsung S9</h2></a>
        <p class="index">ARS $29.000</p>   
        </div>
        <div class="col-md-6 col-lg-4">
        <a href="producto8.php"><img class="foto" src="img/moto-g6.jpeg" alt="Motorola G6"></a>
        <img class="oferta" src="img/super sale .png" alt="supersale">  
        <a href="producto8.php"><h2>Motorola G6</h2></a>
        <p class="index">ARS $16.000</p>
        </div>   
        </div>
        </div>
        </section>
</body>
</html>
@include('footer')