<?php
$Nombre = $_POST['nom_complete_reg'];
$Fecha = $_POST['fecha'];
$Email =$_POST['correo'];
$Nom_fabr = $_POST['Nom_fabr'];
$Mod_eqp = $_POST['clave_reg'];
$Num_IMEI = $_POST['Num_imei'];
$Tel= $_POST['tel'];
$Fecha_En = $_POST['fecha_entrega'];
$Accesorios = $_POST['accesorios'];
$Recibio= $_POST['recibo'];
$Nombre_firma_P = $_POST['nombre_firma_P'];
$Nombre_firma_D = $_POST['nombre_firma_D'];

$header = 'From: ' . $Email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
$mensaje = "Este mensaje fue enviado por " . $Nombre . ",\r\n";
$mensaje .="FECHA" .$Fecha.",\r\n";
$mensaje .="solicitud de  prestamo de  equipo celular" .",\r\n";
$mensaje .= "Su e-mail es: " . $Email . " \r\n";
$mensaje .= "fabricante es: " . $Nom_fabr . " \r\n";
$mensaje .= "su telefono es" ."$Tel" . " \r\n";
$mensaje .= "Numero IMEI" ."$Num_IMEI" . " \r\n";
$mensaje .= "fecha de entrega: " . $Fecha_En . " \r\n";
$mensaje .= "acessorios entregados " . $Accesorios . " \r\n";
$mensaje .= "yo ". $Recibio ."recibo el equipo de celular con las especificaciones en este formato, por lo que compruebo todo lo que viene aquí especificado a si también me comprometo a cumplir las reglas de uso que se enlistan
* No instalar aplicaciones externas a las que ofrece las tiendas oficiales
* No instalar aplicaciones externas a las que ofrece las tiendas oficiales
* Tener en todo momento instalado el GPS (Esto para en caso de que halla un extravió del equipo sea más rápido la localización)
*  No usarlos en ambientes donde no lo recomiende el fabricante 
*  No usar cargadores u adaptadores no autorizados por el fabricante 
En caso de no cumplir alguna de estas reglas se me aplicara una falta administrativa ". " \r\n";
$mensaje .= "NOMBRE Y FIRMA DE LA PERSONA asignada al equipo"."$Nombre_firma_P" . " \r\n";
$mensaje .= "NOMBRE Y FIRMA del jefe departamento de sistemas"."$Nombre_firma_D" . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'jonathanpal@gmail.com';
$asunto = 'Mensaje';

mail($para, $asunto, utf8_decode($mensaje), $header);

/*header("Location:./index.php");*/
?>