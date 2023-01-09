<?php
$Nombre = $_POST['nom_complete_reg'];
$Fecha = $_POST['fecha'];
$Email =$_POST['email'];
/*$Nom_fabr = $_POST['nom_fabri'];*/
$explica = $_POST['Explica'];
$Caracteristicas = $_POST['equipo_requiere'];
$Nom_encar= $_POST['nombre_persona_pues'];
$Caso = $_POST['caso'];
$Nombre_firma_P = $_POST['nombre_firma_P'];
$Nombre_firma_D = $_POST['nombre_firma_D'];


$header = 'From: ' . $Email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
$mensaje = "Este mensaje fue enviado por " . $Nombre . ",\r\n";
$mensaje .="formato de entrega de equipo de computo " ."\r\n";
$mensaje .="FECHA" .$Fecha.",\r\n";
$mensaje .= "Su e-mail es: " . $Email . " \r\n";
$mensaje .= "Explique por qué requiere un equipo de cómputo:  " . $explica . " \r\n";
$mensaje .= "Este equipo requiere alguna característica adicional o software especial:" ."$Caracteristicas" . " \r\n";
$mensaje .= "Aqui  solo escriba(aqui va  el nombre de la persona y/o puesto de la persona  encargada  de autorizar la compra) " ."$Nom_encar" . " \r\n";
$mensaje .= "se autorizo (si/no)(EN caso de marcar  no escriba la razon" . $Caso . " \r\n";
$mensaje .= "NOMBRE Y FIRMA DE LA PERSONA asignada al equipo"."$Nombre_firma_P" . " \r\n";
$mensaje .= "NOMBRE Y FIRMA del jefe departamento de sistemas"."$Nombre_firma_D" . " \r\n";

$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'jonathanpal@gmail.com';
$asunto = 'Mensaje';

mail($para, $asunto, utf8_decode($mensaje), $header);

/*header("Location:./index.php");*/
?>