<?php
$Nombre = $_POST['nom_soli'];
$Nombre_eqp = $_POST['nom_equipo'];
$Fecha = $_POST['fecha'];
$Email =$_POST['email'];
$Marca = $_POST['marca'];
/*$Tel= $_POST['tel'];*/
$Modelo = $_POST['modelo'];
$Funcionamiento = $_POST['funcion'];
$Exitencia = $_POST['Existencia'];
$Prioridad = $_POST['prioridad'];
$Num_piezas = $_POST['num_piezas'];
$Jus_Piezas = $_POST['jus_Piezas'];
$Nombre_firma_P = $_POST['nombre_firma_P'];
$Nombre_firma_D = $_POST['nombre_firma_D'];

$header = 'From: ' . $Email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
$mensaje = "Este mensaje fue enviado por " . $Nombre . ",\r\n";
$mensaje .="reposicion de equipo informatico " ."\r\n";
$mensaje .="FECHA" .$Fecha.",\r\n";
$mensaje .="Nombre del  persona solicitante" .$Nombre.",\r\n";
$mensaje .= "Su e-mail es: " . $Email . " \r\n";
$mensaje .-"Por favor marque con una SI o en un NO respectivamente dependiendo de la pregunta". " \r\n";
$mensaje .= "Nombre del equipo: " . $Nombre_eqp . " \r\n";
$mensaje .= "marca: " . $Marca . " \r\n";
$mensaje .= "modelo" ."$Modelo" . " \r\n";
$mensaje .= "funcionalidad" ."$Funcionamiento" . " \r\n";
$mensaje .= "existen piezas " . $Exitencia . " \r\n";
$mensaje .= "En caso de responder que no existen piezas en el almacén el encargado de sistemas deberá contestar estas preguntas 
Cual es la prioridad: __Poca                       __Normal                           __Urgente " . $Prioridad . " \r\n";
$mensaje .= "Cuantas unidades (Piezas) se requieren comprar:"."$Num_piezas" . " \r\n";
$mensaje .= "Justifique el numero de unidades a comprar:"."$Jus_piezas" . " \r\n";
$mensaje .= "NOMBRE Y FIRMA DE LA PERSONA asignada al equipo"."$Nombre_firma_P" . " \r\n";
$mensaje .= "NOMBRE Y FIRMA del jefe departamento de sistemas"."$Nombre_firma_D" . " \r\n";

$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'jonathanpal@gmail.com';
$asunto = 'Mensaje';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:./index.php");
?>