<?php
session_start();
include("conexion.php");

if (isset($_POST['enviar'])) {
  if (strlen($_POST['correo']) >= 1 && strlen($_POST['password'])) {
    $correo = trim($_POST['correo']);
    $password = trim($_POST['password']);
    //$consulta = "SELECT * FROM registro  ";
    $consulta = ("SELECT id, correo, password FROM usuarios WHERE correo='$correo' AND password='$password' AND sesion = 0 ");
    $resultado = mysqli_query($conex, $consulta) /* or die("Error al realizar la consulta") */;


    $num = $resultado->num_rows;

    if ($num > 0) {
      $row = $resultado->fetch_assoc();
      $password_bd = $row['password'];
      $pass_c = ($password);
      if ($password_bd == $pass_c) {

        $_SESSION['id'] = $row['id'];
        $_SESSION['correo'] = $row['correo'];

        $mensaje = 'correcto';

        $token = sha1(uniqid(mt_rand(), true));
        setcookie('token', $token, time() + (60 * 60 * 12), '/');
        $_SESSION['token'] = $token;

        //echo  $_SESSION['token'];
      } else {
        $mensaje = 'incorrecto';
      }
    } else {
      $mensaje = 'incorrecto';
    }

    /*  if ($resultado) {
          $mensaje='correcto';
         
	    	 ?> 
	    	<h3 class="ok">¡Te has inscrito correctamente!</h3>
            <?php 
	    } else {
        $mensaje='incorrecto';
	    ?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php 
	    }
    }   else {
      $mensaje='incorrecto'; 
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php 
    } */
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>INICIAR SESIÓN ADMIN</title>

  <link rel="icon" href="..//img/logo.png" type="image/png">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <!--Google fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />

  <!--Box icons-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

  <link rel="stylesheet" href="../css/styles.css" />
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="../css/footer.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>


<body>
  <section>
    <nav class="nav">
      <div class="nav__center container">
        <div class="nav__logo">
          <a href="../index.php"><img class="logotipo" src="..//img/logo.png" alt=""></a>
        </div>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
        <ul>
          <li><a href="../index.php">Inicio</a></li>
          <li><a href="../productos.html">Productos</a></li>
          <li><a href="contacto.php">Contacto</a></li>
          <li><a href="registrar.php">Registrar</a></li>
          <li><a class="active" href="#">Iniciar sesión</a></li>
          <li><a href="../ayuda.html">Ayuda</a></li>
        </ul>

        </input>
      </div>

    </nav>
  </section>

  <!-- Form container -->
  <section id="form-width">

    <form action="login2.php" id="form-container" method="POST">
      <div class="row">

        <!-- form img -->
        <div class="col-lg-6 col-md-12 col-sm-12">
          <figure class="w-100 img-form">
            <img src="..//img/login.jpg">
          </figure>

        </div>

        <!-- form input -->
        <div class="col-lg-6 col-md-12 col-sm-12">

          <h4 class="text-center text-uppercase anton">INICIAR SESIÓN - ADMINISTRADOR</h4>
          <hr>

          <!-- inputs -->
          <div class="inputs-form form-group">
            <label for="email_form" class="ubuntu">Correo Electrónico:</label>
            <input type="email" placeholder="Escriba su email" name="correo" id="email_form" class="form-control mb-4" required>

            <label for="" class="ubuntu">Contraseña:</label>
            <input type="password" placeholder="Escriba su contraseña" name="password" id="password" class="form-control mb-4" required>

            </label>

            <label for="" class="ubuntu">
              <abbr title="Recupera la contraseña de tu cuenta">
                <a href="recuperar_admin.php">Olvidé mi contraseña</a>
              </abbr>
            </label>

            <br>
            <div class="g-recaptcha" data-sitekey="6Le0xE0eAAAAAJkXCdFjWtULfCXbr90ebXSu5hq9"></div>
            <br>

            <abbr title="Envía tus datos para que sean validados">
              <button type="submit" class="btn mt-1 ubuntu" id="send-form" name="enviar">Enviar</button>
            </abbr>

          </div>

        </div>


      </div>
    </form>

  </section>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <script src="..//js/formulario.js"></script>
  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

  <div class="flotante">
    <div class="nav__list">
      <abbr title="Si desea vaciar el carrito, diríjase a la pestaña de productos">
        <div class="carrito__icon">
          <i class="bx bx-cart"></i>
          <span class="item__total">0</span>
        </div>
      </abbr>
    </div>
  </div>


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
  <script src="../js/scripts.js"></script>


  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>Cool Sneakers</h4>
          <li>Gracias por tu visita. Te esperamos pronto!</li>
        </div>
        <div class="footer-col">
          <h4>Visitar sección</h4>
          <a href="../productos.html">Productos</a></li>
          <a href="registrar.php">Registrar</a></li>
          <a href="login.php">Iniciar sesión</a></li>
        </div>
        <div class="footer-col">
          <h4>¿Necesitas ayuda?</h4>
          <a href="../ayuda.html">Ayuda</a></li>
        </div>
        <div class="footer-col">
          <h4>Contáctate con nosotros</h4>
          <li>Exprésanos tus sugerencias y comentarios.
            <br><br>
            <a href="contacto.php">Contacto</a>
          </li>
        </div>
      </div>
    </div>
  </footer>

</body>
<?php
if ($mensaje == 'correcto') { ?>
  <script>
    function alerta() {
      swal({
        title: "Se Inicio Sesión como Administrador Correctamente",
        text: "Da click en el botón para continuar",
        icon: "success",
      }).then(function() {
        window.location = "../admin.php";
      });
    }
    alerta();
  </script>

  <?php
  include("conexion.php");
  $consulta2 = ("UPDATE usuarios SET sesion = 1 WHERE correo = '$correo'");
  $resultado = mysqli_query($conex, $consulta2)

  ?>

<?php } else if ($mensaje == 'incorrecto') { ?>
  <script>
    function alerta() {
      swal({
        title: "El usuario o contraseña NO son Correctos o ya hay una sesión con esta cuenta abierta",
        text: "Favor de verificar",
        icon: "error",
        button: "Ok",
      }).then(function() {
        window.location = "#";
      });
    }
    alerta();
  </script>
<?php
}
?>

</html>