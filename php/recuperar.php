<?php
$mensaje = '';
session_start();
include("conexion.php");

if (isset($_POST['enviar'])) {
  if (strlen($_POST['correo']) >= 1) {
    $correo = trim($_POST['correo']);
    //$consulta = "SELECT * FROM registro  ";
    $consulta = ("SELECT id, correo FROM registro WHERE correo='$correo'");
    $resultado = mysqli_query($conex, $consulta) /* or die("Error al realizar la consulta") */;


    $num = $resultado->num_rows;

    if ($num > 0) {
      $row = $resultado->fetch_assoc();
      $password_bd = $row['correo'];
      $pass_c = ($correo);
      if ($password_bd == $pass_c) {

        $_SESSION['id'] = $row['id'];
        $_SESSION['correo'] = $row['correo'];


        $mensaje = 'correcto';
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
  <title>RECUPERAR CONTRASEÑA</title>

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
          <li><a href="login.php">Iniciar sesión</a></li>
          <li><a href="../ayuda.html">Ayuda</a></li>
        </ul>

        </input>
      </div>

    </nav>
  </section>

  <!-- Form container -->
  <section id="form-width">

    <form action="recuperar.php" id="form-container" method="POST">
      <div class="row">

        <!-- form img -->
        <div class="col-lg-6 col-md-12 col-sm-12">
          <figure class="w-100 img-form">
            <img src="..//img/contra.png">
          </figure>

        </div>

        <!-- form input -->
        <div class="col-lg-6 col-md-12 col-sm-12">

          <h4 class="text-center text-uppercase anton">RECUPERAR CONTRASEÑA</h4>
          <hr>

          <!-- inputs -->
          <div class="inputs-form form-group">
            <label for="email_form" class="ubuntu">Para recuperar contraseña por favor introduzca un correo electrónico </label>
            <br>
            <label for="email_form" class="ubuntu">Correo Electrónico:</label>
            <input type="email" placeholder="Escriba su email" name="correo" id="email_form" class="form-control mb-4" required>

            <br>
            <abbr title="Envía tus datos para que sean validados">
              <button type="submit" class="btn mt-1 ubuntu" id="send-form" name="enviar">Enviar correo electrónico</button>
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
        title: "El correo electrónico se envió correctamente con una serie de números",
        text: "Da click en el botón para continuar",
        icon: "success",
      }).then(function() {
        window.location = "recuperar2.php";

      });
    }
    alerta();
  </script>

  <?php

  //alimentamos el generador de aleatorios
  srand(time());
  //generamos un número aleatorio
  $numero_aleatorio = rand(1000, 5000);
  $cliente = 'amigx';
  $destinatario = ($_REQUEST['correo']);
  $asunto       = "Recuperación de contraseña de CoolSneakers";
  $cuerpo .= ' 
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: "Roboto", sans-serif;
        font-size: 20px;
        font-weight: 300;
        color: #888;
        background-color:rgba(230, 225, 225, 0.5);
        line-height: 30px;
        text-align: center;
    }
    .contenedor{
        width: 80%;
        min-height:auto;
        text-align: center;
        margin: 0 auto;
        background: #ffffff;
        border-top: 3px solid #088A85;
    }
    .btnlink{
        padding:15px 30px;
        text-align:center;
        background-color:#088A85;
        color: crimson !important;
        font-weight: 600;
        text-decoration: blue;
    }
    .btnlink:hover{
        color: #fff !important;
    }
    .imgBanner{
        width:100%;
        margin-left: auto;
        margin-right: auto;
        display: block;
        padding:0px;
    }
    .misection{
        color: #34495e;
        margin: 4% 10% 2%;
        text-align: center;
        font-family: sans-serif;
    }
    .mt-5{
        margin-top:50px;
    }
    .mb-5{
        margin-bottom:50px;
    }
    </style>
';

  $cuerpo .= '
</head>
<body>
    <div class="contenedor">
    
    <table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;">
    
    <center><img class="logotipo" src="http://laraana.utdgrupoti.com/COOLSNEAKERS/img/logo.png" alt=""> </center>
    <tr>
        <td style="background-color: #ffffff;">
            <div class="misection">
                <h2 style="color: #088A85; margin: 0 0 7px">Hola, ' . $cliente . '</h2>
                <p style="margin: 2px; font-size: 18px">Gracias por confiar en nosotros. Tu ' . utf8_decode("código") . ', para recuperar la ' . utf8_decode("contraseña") . ' es: ' . $numero_aleatorio . ' </p>

            </div>
        </td>
    </tr>
</table>';

  $cuerpo .= '
      </div>
    </body>
  </html>';


  $headers  = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
  $headers .= "From: CoolSneakers <coolsneakers.dgo@gmail.com>\r\n";
  $headers .= "Reply-To: ";
  $headers .= "Return-path:";
  $headers .= "Cc:";
  $headers .= "Bcc:";

  mail($destinatario, $asunto, $cuerpo, $headers)

  ?>

  <?php
  include("conexion.php");
  $consulta2 = ("UPDATE registro SET rec_contra = '$numero_aleatorio' WHERE correo = '$destinatario'");
  $resultado = mysqli_query($conex, $consulta2)

  ?>


<?php } else if ($mensaje == 'incorrecto') { ?>
  <script>
    function alerta() {
      swal({
        title: "El correo electrónico no pudo ser enviado, intente de nuevo",
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