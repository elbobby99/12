<?php
$Nombre = $_POST['nom_complete_reg'];
$Email =$_POST['email'];
$Nom_fabr = $_POST['Nom_fabr'];
$Mod_eqp = $_POST['clave_reg'];
$Num_IMEI = $_POST['num_IMEI'];
$Tel= $_POST['tel'];
$Fecha_EN = $_POST['nom_complete_reg'];
$Encender = $_POST['encender'];
$Entrego = $_POST['entrego'];
$Daño = $_POST['daño'];
$Caso = $_POST['caso'];
$Nombre_firma = $_POST['nombre_completo'];

$header = 'From: ' . $Email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
$mensaje = "Este mensaje fue enviado por " . $Nombre . ",\r\n";
$mensaje = "Formato devolucion de celular " . ",\r\n";
$mensaje .= "Su e-mail es: " . $Email . " \r\n";
$mensaje .= "su telefono es" ."$Tel" . " \r\n";
$mensaje .= "nombre del fabricante" ."$Nom_fabr" . " \r\n";
$mensaje .= "Modelo del Equipo" ."$Mod_eqp" . " \r\n";
$mensaje .= "Numero IMEI" ."$Num_IMEI" . " \r\n";
$mensaje .= " el equipo enciende en caso responde (NO) explica el por que" ."$Encender" . " \r\n";
$mensaje .= "se entrego con accesorios en caso responde NO explica el por que" ."$Entrego" . " \r\n";
$mensaje .= "tiene algun daño" ."$Daño" . " \r\n";
$mensaje .= "En caso  de responder SI  el daño fue total o parcial y incluir una explicacion"."$Caso" . " \r\n";
$mensaje .= "Nombre_firma"."$Nombre_firma" . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'jonathanpal@gmail.com';
$asunto = 'Mensaje';

mail($para, $asunto, utf8_decode($mensaje), $header);


?>