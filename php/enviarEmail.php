<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta content="initial-scale=1, shrink-to-fit=no, width=device-width" name="viewport">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i|Roboto+Mono:300,400,700|Roboto+Slab:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="icon" type="image/png" href="imgs/logo-mywebsite-urian-viera.svg">

    <link rel="stylesheet" type="text/css" href="css/material.min.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <title>Enviando Emails a clientes</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>



<div class="container mt-5"> 

<?php
header('Content-Type: text/html; charset=UTF-8'); 
include('config.php');
if (isset($_REQUEST['enviarform'])) {
    if (is_array($_REQUEST['correo'])) {
        $num_countries = count($_REQUEST['correo']);
        $columna   = 1;
?>


    <script>
        function alerta(){
            swal({
                title: "Su correo se envió correctamente",
                text: "Da click en el botón para continuar",
                icon: "success",
            }).then(function() {
                window.location = "emails.php";
            });
        }
        alerta();
    </script>



<?php
foreach ($_REQUEST['correo'] as $key => $emailCliente) {

$cliente = 'amigx';

$destinatario = trim($emailCliente); //Quitamos algun espacion en blanco
$asunto       = "Bienvenido a CoolSneakers";
$cuerpo = '
    <!DOCTYPE html>
    <html lang="es">
    <head>
    <title>Envio de email de forma masiva - CoolSneakers</title>';
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
                <h2 style="color: #088A85; margin: 0 0 7px">Hola, '.$cliente.'</h2>
                <p style="margin: 2px; font-size: 18px">te damos la Bienvenida a CoolSneakers, una tienda en línea de '.utf8_decode("tenis").', te invitamos a que conozcas nuestros nuevos productos con los mejores precios. <a href="http://laraana.utdgrupoti.com/COOLSNEAKERS/productos.html">Ir a la página</a> </p>

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
    if(mail($destinatario,$asunto,$cuerpo,$headers)){
        $UpdateEmail = ("UPDATE clientes SET notificacion='1'  WHERE correo='".$emailCliente."' ");
        $resultEmail = mysqli_query($con, $UpdateEmail);
    }

        echo '<div>'. $columna. "). " .$emailCliente.'</div>';
        $columna ++;
    }
 }
    
    
/*
    NOTA IMPORTANTE:
    PARA ENVIAR CORREOS TANTO COMO  GMAIL - HOTMAIL(Outlook), ESTE CODIGO FUNCIONA MEJOR QUE EL ANTERIOR,
    EN ESTE LLEGAN LOS EMAIL A Outlook EN BANDEJA DE ENTRADA AL IGUAL QUE GMAIL, SOLO DEBES CAMBIAR EL CONTENIDO 
    DEL MESAJE QUE ENVIAS. OJO SI EXISTE ALGUNA URL O VARIABLE QUE ESTES ENVIANDO EN EL EMAIL Y NO EXISTE O ESTA 
    INCORRECTA EL CORREO NO LLEGARA DEBES ESTA PENDIENTE EN ESTO.
*/

/*
    $para    = "programadorphp2017@gmail.com";
    $nameFull = "Urian Viera";
    $urlCanal = "https://www.youtube.com/channel/UCodSpPp_r_QnYIQYCjlyVGA";
    $titulo  = "Mi Formulario de Contacto";
    $mensaje = "
    <!doctype html>
    <html lang='es'>
    <head>
    <title>EMAIL</title>
    </head>
        <body>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <div style='width: 80%; margin:0 auto; background-color: #ffffff; color: #34495e; text-align: center;font-family: sans-serif'>
                <h2 style='font-size: 16px; color: #34495e; margin: 0 0 7px;'>&#161;Felicitaciones&#33; 
                    <strong style='color:#555;'> ".$nameFull."</strong>, dale click al bot&oacute;n para visualizar tu bono de descuento de <strong>$20.000</strong>. 
                    Recuerda mostrarlo en la caja de cualquier sede del retailer escogido, no es necesario imprimirlo.
                </h2>
                <p>&nbsp;</p>
                    <a href=".$urlCanal." style='background-color: #fe4c50;border: #fe4c50;color: white;text-decoration: none;padding: 10px 40px;border-radius: 5px;'> Ver cup&oacute;n </a>
                <p>&nbsp;</p>
                <img style='padding: 0; display: block; width:100%; max-width:600px; margin:0 auto;' src='https://blogangular-c7858.web.app/assets/images/work.gif'>
                <p>&nbsp;</p>
            </div>
        </body>
    </html>
    "; 
    //Cabecera Obligatoria
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: WebDeveloper <programadorphp2017@gmail.com>' . "\r\n";
    $headers .= 'Cc: noresponder@pruebaroyalcanin.com.co' . "\r\n";
    
    //OPCIONAR
    $headers .= "Reply-To: "; 
    $headers .= "Return-path:"; 
    $headers .= "Cc:"; 
    $headers .= "Bcc:"; 
    
    mail($para, $titulo, $mensaje, $headers);
  */

}
?>
  


</div>



</body>
</html>
