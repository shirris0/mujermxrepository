<?php


require("class.phpmailer.php");
require("class.smtp.php");

// Valores enviados desde el formulario

if ( !isset($_POST["name"]) || !isset($_POST["email"]) || !isset($_POST["subject"])  || !isset($_POST["message"]) ) {
    die ("Es necesario completar todos los datos del formulario");
}





$nombre = $_POST["name"];

$email = "contacto@mujermx.org";

$emailContent = $_POST["email"];

$asunto = $_POST["subject"];

$mensaje = $_POST["message"];


$destinatario = "contacto@mujermx.org";


// Datos de la cuenta de correo utilizada para enviar v�a SMTP
$smtpHost = "mail.mujermx.org";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario = "contacto@mujermx.org";  // Mi cuenta de correo
$smtpClave = "=&ZrJX-6WGM#";  



$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 587; 
$mail->IsHTML(true); 
$mail->CharSet = "utf-8";

// VALORES A MODIFICAR //
$mail->Host = $smtpHost; 
$mail->Username = $smtpUsuario; 
$mail->Password = $smtpClave;


$mail->From = $email; // Email desde donde env�o el correo.
$mail->FromName = $nombre;
$mail->AddAddress($destinatario); // Esta es la direcci�n a donde enviamos los datos del formulario

$mail->Subject = "Email de contacto desde Fundación"; // Este es el titulo del email.
$mensajeHtml = nl2br($mensaje);
$mail->Body = "
<html> 

<body> 

<h1>Recibiste un nuevo mensaje desde Fundación Mujer México Rural</h1>

<p>Informacion enviada por el usuario de la web:</p>

<p>Nombre: {$nombre}</p>

<p>Email: {$emailContent}</p>

<p>Asunto: {$asunto}</p>

<p>Mensaje: {$mensaje}</p>

</body> 

</html>

<br />"; // Texto del email en formato HTML
$mail->AltBody = "{$mensaje} \n\n "; // Texto sin formato HTML
// FIN - VALORES A MODIFICAR //

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$estadoEnvio = $mail->Send(); 

if($estadoEnvio){
    die('OK');
}else{
    die( 'Unable to load the "PHP Email Form" Library!');
}








?>

