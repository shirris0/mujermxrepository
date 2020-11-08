<?php 

require "PHPMailer/Exception.php";
require "PHPMailer/PHPMailer.php";
require "PHPMailer/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$oMail = new PHPMailer();
$oMail->isSMTP();
$oMail->Host="mail.mujermx.org";
$oMail->Port=465;
$oMail->SMTPSecure="tls";
$oMail->SMTPAuth=true;
$oMail->Username="contacto@mujermx.org";
$oMail->Password="=&ZrJX-6WGM#";
$oMail->setFrom("contacto@mujermx.org","Hola soy Iris Wilson");
$oMail->addAddress("iriswilsonr@gmail.com","Wilson2");
$oMail->Subject="Hola iwilson";
$oMail->msgHTML("Hola soy un mensaje de prueba");

if(!$oMail->send()){
    echo $oMail->ErrorInfo;
}else{
    echo "Todo salio bien";
}

?>