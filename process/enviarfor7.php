<?php
$Nombre = $_POST['nom_complete_reg'];
$Fecha = $_POST['fecha'];
$Email =$_POST['email'];
$Nom_fabr = $_POST['nom_fabri'];
$Modelo = $_POST['modelo'];
/*$Marca = $_POST['marca'];*/
$Fecha_en = $_POST['Fecha_En'];
$Tipo_Eqp = $_POST['Tipo_Eqp'];
$Siste_op = $_POST['Siste_op'];
$Accesorios = $_POST['Accesorios'];
$Observaciones = $_POST['Observacion'];
$Recibo =$_POST['recibo'];
$Nombre_firma = $_POST['nombre_firma'];


$header = 'From: ' . $Email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
$mensaje = "Este mensaje fue enviado por " . $Nombre . ",\r\n";
$mensaje .="formato de entrega de equipo de computo " ."\r\n";
$mensaje .="FECHA" .$Fecha.",\r\n";
$mensaje .= "Su e-mail es: " . $Email . " \r\n";
$mensaje .= "modelo" ."$Modelo" . " \r\n";
$mensaje .= "Fecha de entrega: " ."$Fecha_en" . " \r\n";
$mensaje .= "Tipo de equipo " . $Tipo_Eqp . " \r\n";
$mensaje .= " Sistema operativo instalado" . $Siste_op . " \r\n";
$mensaje .= "Accesorios entregados: "."$Accesorios" . " \r\n";
$mensaje .= "Observaciones del equipo: "."$Observaciones" . " \r\n";
$mensaje .= "YO"."$Recibo".
"recibo el equipo de cómputo con las especificaciones en este formato, por lo que compruebo todo lo que viene aquí especificado a si también me comprometo a cumplir las reglas de uso que se enlistan:
•	No mantener el equipo encendido cuando no se esté usando 
•	Mantener antivirus/firewall encendido en todo momento 
•	Mantenerlo solo en el área de trabajo asignada 
•	En caso de una falla o problema se deberá notificar al encargado del área de sistemas
En caso de no cumplir alguna de estas reglas se me aplicara una falta administrativa 
" 
. " \r\n";
$mensaje .= "NOMBRE Y FIRMA DE LA PERSONA asignada al equipo"."$Nombre_firma" . " \r\n";

$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'jonathanpal@gmail.com';
$asunto = 'Mensaje';

mail($para, $asunto, utf8_decode($mensaje), $header);

/*header("Location:./index.php");*/
?>