<?php
$nombre = $_POST['nombre'];
$para = $_POST['email'];
$empresa = $_POST['mensaje'];
$de='rauliglesias1997@gmail.com';
$link ='https://imgredirect.milanuncios.com/fg/2162/15/postales-de-coleccion/Postal-15-Calpe-216215001_1.jpg';

$header = 'From: ' . $de . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $de . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());
$mensaje .= "Accede a este link para ver la maravilllosa postal que te han enviado: "; 

$asunto = 'Postal de Calpe';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>