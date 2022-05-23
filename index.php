<?php
include("php/conexion.php");
$consulta3 = ("UPDATE usuarios SET sesion = 0 WHERE sesion = 1");
$resultado = mysqli_query($conex, $consulta3)
?>

<?php
include "admin/db.php";
$images = get_imgs();
?>

<html lang="en">

<head>
  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>COOL SNEAKERS</title>

  <link rel="icon" href="img/logo.png" type="image/png">


  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>


  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>


  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <!--Google fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />

  <!--Box icons-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/nosotros.css">
  <link rel="stylesheet" href="css/animacion.css">

  <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js' type='text/javascript'></script>
  
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="flexslider.css">

  <li><a href="./admin" target="_blank">Administar</a></li>
</head>

<body>
  <section>
    <nav class="nav">
      <div class="nav__center container">
        <div class="nav__logo">
          <a href="index.php"><img class="logotipo" src="img/logo.png" alt=""></a>
        </div>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
        <ul>
          <li><a class="active" href="#">Inicio</a></li>
          <li><a href="productos.html">Productos</a></li>
          <li><a href="php/contacto.php">Contacto</a></li>
          <li><a href="php/registrar.php">Registrar</a></li>
          <li><a href="php/login.php">Iniciar sesión</a></li>
          <li><a href="ayuda.html">Ayuda</a></li>
        </ul>

        </input>
      </div>

    </nav>
  </section>


  <div class="separador text-center text-white">
  </div>

  <div class="animacion">
    <div class="anim-cont-img">
      <img src="img/logo.png" alt="" id="logo-anim" class="logo-anim">
    </div> 
    <div class="anim-cont-texto">
      <p id="texto-anim"class="texto-anim">Somos una empresa dedicada a la venta de tenis de las marcas más reconocidas, 
        a los mejores precios. Esperamos que encuentres lo que buscas :D</p>
    </div>   
  </div>

  

  <div class="container">
    <div class="row acerca-de justify-content-around">
      <article class="col-10 col-sm-5">
        <figure class="text-center">
          <img src="img/separador1.png" alt="" width="100px" id="img-separador">
          <figcaption>
            <p id="texto-separador">
              <strong class="mb-2">Los mejores modelos disponibles</strong>
            <div class="w-100"></div>
            Estamos al tanto de los modelos más usados.
            </p>
          </figcaption>
        </figure>
      </article>

      <article class="col-10 col-sm-5">
        <figure class="text-center">
          <img src="img/separador2.png" alt="" width="100px" id="img-separador">
          <figcaption>
            <p id="texto-separador">
              <strong class="mb-2">Los mejores precios</strong>
            <div class="w-100"></div>
            Las mejores ofertas para que luzcas el mejor calzado.
            </p>
          </figcaption>
        </figure>
      </article>
    </div>
  </div>
  <script src="./js/animacion.js"></script>


 
  <div class="flotante-nuevo">
    <div class="nav__list btn-carrito">
      <abbr title="Si desea vaciar el carrito, diríjase a la pestaña de productos">
        <div class="carrito__icon">
          <i class="bx bx-cart"></i>
          <span class="item__total">0</span>
        </div>
      </abbr>
    </div>
    <div class="espacio-btn">
    </div>
    <div class="btn-manual">
      <abbr title="Ver manual de usuario">
        <a href="manual.pdf"> i </a>
      </abbr>
    </div>
  </div>

  <section>
    <div class="sliderIndex">
      <div id="carouselExampleCaptions" class="carousel slide w-80" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/1.png" class="d-block w-100" alt="Imagen 1">
            <div class="carousel-caption d-none d-md-block">
              <p>Encuentra los mejores modelos aquí</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/2.png" class="d-block w-100" alt="Imagen 2">
            <div class="carousel-caption d-none d-md-block">
              <p>Luce los mejores tenis.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/3.png" class="d-block w-100" alt="Imagen 3">
            <div class="carousel-caption d-none d-md-block">
              <p>Arma tus mejores outfits.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>
 <!--  <div id="slider2">  
    <ul class="slider">
      <li id="slide1">
        <img src="img/01.jpg"/>
      </li>
      <li id="slide2">
        <img src="img/02.jpg"/>
      </li>
      <li id="slide3">
        <img src="img/03.jpg"/>
      </li>
      <li id="slide4">
        <img src="img/04.jpg"/>
      </li>
    </ul>
    
    <ul class="menu">
      <li>
        <a href="#slide1">1</a>
      </li>
      <li>
        <a href="#slide2">2</a>
      </li>
       <li>
        <a href="#slide3">3</a>
      </li>
      <li>
        <a href="#slide4">3</a>
      </li>
    </ul>
    
  </div> -->

<!--   <div class="carousel">
    <button id="retroceder">Retroceder</button>
    <div id="imagen"></div>
    <button id="avanzar">Avanzar</button>
</div>
<div class="controles">
    <button id="play">Play</button>
    <button id="stop" disabled>Stop</button>
</div> -->

<!-- <center>
  <div id="carrusel" class="carousel">
    <div><img src="img/1.1.jpg"/></div>
    <div><img src="img/1.2.jpg"/></div>
    <div><img src="img/1.3.jpg"/></div>
    <div><img src="img/1.4.jpg"/></div>
  </div>
</center> -->

<div class="container carrusel-index">
<div class="row">
<div class="col-md-12">


<?php if(count($images)>0): ?>
  <div class="flexslider">
    <ul class="slides">
<?php foreach($images as $img): ?>
  <li>
    <img src="<?php echo 'admin/'.$img->folder.$img->src; ?>" alt="<?php echo $img->title; ?>">
  </li>
<?php endforeach; ?>
</ul>
  </div>
<?php else: ?>
<?php endif; ?>
</div>
</div>
</div>


<script src="jquery.min.js"></script>
<script src="jquery.flexslider.js"></script>

<script type="text/javascript">
  $('.flexslider').flexslider({
    animation: "slide"
  });


</script>

  <!--Carrito-->

  <section class="carrito__overlay">
    <div class="carrito">
      <span class="close__carrito">
        <i class="bx bx-x"></i>
      </span>
      <h1>Su Carrito</h1>

      <div class="carrito__center">


        <!-- <div class="carrito__item">

            <img src="https://cdn4.chrono24.com/images/topmodels/2875-7wlcl6ogfoc0qxg22ox6up9m-Original.png?auto=compress&amp;h=305" alt="reloj">
            <div>
              <h3>Relojes Originales </h3>
              <p class="price">$122</p>
            </div>
            <div>
              <span>
                <i class="bx bxs-up-arrow"></i>
              </span>
              <p>1</p>
              <span>
                <i class="bx bxs-down-arrow"></i>
              </span>
            </div>
            <div>
              <span class="remove__item">
                <i class="bx bx-trash"></i>
              </span>
            </div>

            
          </div> -->
      </div>

      <div class="carrito__footer">
        <h3>Total: $ <span class="carrito__total">0</span></h3>
        <button class="clear__carrito btn">remover carrito</button>
      </div>
    </div>
  </section>

  <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
  <script src="./js/scripts.js"></script>


  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>Cool Sneakers</h4>
          <li>Gracias por tu visita. Te esperamos pronto!</li>
        </div>
        <div class="footer-col">
          <h4>Visitar sección</h4>
          <a href="productos.html">Productos</a></li>
          <a href="php/registrar.php">Registrar</a></li>
          <a href="php/login.php">Iniciar sesión</a></li>
          <a href="php/login2.php">Iniciar sesión - administrador</a></li>
        </div>
        <div class="footer-col">
          <h4>¿Necesitas ayuda?</h4>
          <a href="ayuda.html">Ayuda</a></li>
        </div>
        <div class="footer-col">
          <h4>Contáctate con nosotros</h4>
          <li>Exprésanos tus sugerencias y comentarios.
            <br><br>
            <a href="php/contacto.php">Contacto</a>
          </li>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>