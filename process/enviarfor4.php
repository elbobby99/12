<?php
$Nombre = $_POST['nom_complete_reg'];
$Fecha = $_POST['Fecha'];
$Email =$_POST['correo'];
$eqp_En = $_POST['Equipo_entregado'];
/*$Tel= $_POST['tel'];*/
$Accesorios = $_POST['acessorios'];
$Forma_correcta= $_POST['Formacorrecta'];
$Medidas_seg = $_POST['medidas_seguridad'];
$Instalacion_soft = $_POST['instal_sof'];
$asignaPass = $_POST['Asigna_pass'];
$Instalacion_tra = $_POST['instal_trabajo'];
$asignaPass = $_POST['justificacion'];
$Nombre_firma = $_POST['nombre_firma'];

$header = 'From: ' . $Email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
$mensaje = "Este mensaje fue enviado por " . $Nombre . ",\r\n";
$mensaje .="hoja de verificacion de equipo informatico de computo" ."\r\n";
$mensaje .="FECHA" .$Fecha.",\r\n";
$mensaje .= "Su e-mail es: " . $Email . " \r\n";
$mensaje .-"Por favor marque con una SI o en un NO respectivamente dependiendo de la pregunta". " \r\n";
$mensaje .= " El equipo fue entregado en su empaque/embalaje/caja:: " . $eqp_En . " \r\n";
$mensaje .= "Se me entregaron todos sus accesorios" ."$Accesorios" . " \r\n";
$mensaje .= "Se le mostro como se debe usar de forma correcta:" ."$Forma_correcta" . " \r\n";
$mensaje .= "Se le mostro las medidas de seguridad que se deben de tener " . $Medidas_seg . " \r\n";
$mensaje .= "Se instalaron todo el software para su buen funcionamiento: " . $Instalacion_soft . " \r\n";
$mensaje .= "Me asignaron contraseña de acceso a el equipo:"."$asignaPass" . " \r\n";
$mensaje .= "Se realizo alguna instalación en el área de trabajo:"."$asignaPass" . " \r\n";
$mensaje .= "Me asignaron contraseña de acceso a el equipo:"."$Instalacion_tra" . " \r\n";
$mensaje .= "En caso de haber respondido NO en algunas preguntas que el encargado de sistemas justifique la respuesta"."$Instalacion_tra" . " \r\n";
$mensaje .= "Nombre y firma de la persona asignada al equipo"."$Nombre_firma" . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'jonathanpal@gmail.com';
$asunto = 'Mensaje';

mail($para, $asunto, utf8_decode($mensaje), $header);

/*header("Location:./index.php");*/
?>