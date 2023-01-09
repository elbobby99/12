<?php
$Nombre = $_POST['nom_complete_reg'];
$Email =$_POST['email'];
$Nom_Fa = $_POST['fabri'];
$Mod_eqp = $_POST['clave_reg'];
$Fecha_En = $_POST['fecha_entrega'];
$Fecha_DE= $_POST['fecha_devolucion'];
$Tipo_eqp = $_POST['tipo_equipo'];
$Encender = $_POST['encender'];
$Entrego = $_POST['entrego'];
$Daño = $_POST['daño'];
$Caso = $_POST['caso'];
$Nombre_firma = $_POST['nombre_completo'];

$header = 'From: ' . $Email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
$mensaje = "Formato devolucion de equipo de computo \r\n";
$mensaje = "Este mensaje fue enviado por " . $Nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $Email . " \r\n";
$mensaje .= "nombre del fabricante es:" . $Nom_Fa . " \r\n";
$mensaje .= "fecha de entrega: " . $Fecha_En . " \r\n";
$mensaje .= "fecha de Devolucion: " . $Fecha_DE . " \r\n";
$mensaje .= "se entrego con accesorios en caso responde NO explica el por que" ."$Entrego" . " \r\n";
$mensaje .= "tiene algun daño" ."$Daño" . " \r\n";
$mensaje .= "En caso  de responder SI  el daño fue total o parcial y incluir una explicacion"."$Caso" . " \r\n";
$mensaje .= "Nombre_firma"."$Nombre_firma" . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'jonathanpal@gmail.com';
$asunto = 'Mensaje';

mail($para, $asunto, utf8_decode($mensaje), $header);


?>