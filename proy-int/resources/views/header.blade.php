<div class="header">
    
<nav class="navbar navbar-expand-lg navbar-light ">
    <a href="/index"><img src="/img/LOGO.png" alt="logotipo" class="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="barradeinicio">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
    <li class="nav-item active">
    <a class="nav-link" href="/index">INICIO <span class="sr-only"></span></a>
    </li>
    <li class="nav-item active">
    <a class="nav-link" href="/productos">PRODUCTOS <span class="sr-only"></span></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="/preguntas" tabindex="-1" aria-disabled="true">AYUDA</a>
    </li>
    <li>
    <a class="fas fa-shopping-cart black"  href= "/carrito" ></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="login.php" tabindex="-1" aria-disabled="true"><img src="img/usuario.png" alt="" width="25px"></a>
    </li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false"></strong><?= isset($usuario['nombre']) ? $usuario['nombre'] : '' ?></a>
    <div class="dropdown-menu">
    <a class="dropdown-item"  href="/miperfil">Mi Perfil</a>
    </a><form action="index.php" method="post"> <input type='submit' a class="dropdown-item" name='salir' value='Salir' />
    </form>
    </div>
    </ul>       
    </div>
    </div>
    </nav>
    </div>

</div>