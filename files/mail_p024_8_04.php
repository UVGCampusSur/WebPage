<?php
include "../res/imemail.inc.php";

//Form Data
$txtData = "";
$htmData = "";
$txtData .= "Nombre del solicitante: " . $_POST["Itm_8_04_1"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Nombre del solicitante:</b></td><td>" . $_POST["Itm_8_04_1"] . "</td></tr>";
$csvData .= $_POST["Itm_8_04_1"] . ";";
$txtData .= "Correo electrónico: " . $_POST["Itm_8_04_2"] . "\r\n";
$htmData .= "<tr><td width=\"25%\" bgcolor=\"#EEEEEE\"><b>Correo electrónico:</b></td><td bgcolor=\"#EEEEEE\">" . $_POST["Itm_8_04_2"] . "</td></tr>";
$csvData .= $_POST["Itm_8_04_2"] . ";";
$txtData .= "Descripción del trabajo: " . $_POST["Itm_8_04_3"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Descripción del trabajo:</b></td><td>" . $_POST["Itm_8_04_3"] . "</td></tr>";
$csvData .= $_POST["Itm_8_04_3"] . ";";
$txtData .= "Ubicación: " . $_POST["Itm_8_04_4"] . "\r\n";
$htmData .= "<tr><td width=\"25%\" bgcolor=\"#EEEEEE\"><b>Ubicación:</b></td><td bgcolor=\"#EEEEEE\">" . $_POST["Itm_8_04_4"] . "</td></tr>";
$csvData .= $_POST["Itm_8_04_4"] . ";";
$txtData .= "Fecha cuando se necesita (dd/mm/aa): " . " " . $_POST["Itm_8_04_5_d"] . " " . $_POST["Itm_8_04_5_m"] . " " . $_POST["Itm_8_04_5_y"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Fecha cuando se necesita (dd/mm/aa):</b></td><td>" . " " . $_POST["Itm_8_04_5_d"] . " " . $_POST["Itm_8_04_5_m"] . " " . $_POST["Itm_8_04_5_y"] . "</td></tr>";
$csvData .= $_POST["Itm_8_04_5_d"] . " " . $_POST["Itm_8_04_5_m"] . " " . $_POST["Itm_8_04_5_y"] . ";";

// Template
$htmHead = "<table width=\"90%\" border=\"0\" bgcolor=\"#FFFFFF\" cellpadding=\"4\" style=\"font: 11px Tahoma; color: #000000; border: 1px solid #BBBBBB;\">";
$htmFoot = "</table>";

//Send email to owner
$txtMsg = "Solicitud de servicios en línea";
$htmMsg = $htmHead . "<tr><td>Solicitud de servicios en línea</td></tr>" . $htmFoot;
$oEmail = new imEMail(($imForceSender ? $_POST["Itm_8_04_2"] : "servicios@campussur.uvg.edu.gt"),"servicios@campussur.uvg.edu.gt","Solicitud en linea*","iso-8859-1");
$oEmail->setText($txtMsg . "\r\n\r\n" . $txtData);
$oEmail->setHTML("<html><body bgcolor=\"#063A69\"><center>" . $htmMsg . "<br>" . $htmHead . $htmData . $htmFoot . "<br>" . $htmHead . "<tr><td style=\"font-size: 85%\">" . $csvData . "</td></tr>" . $htmFoot . "</center></body></html>");
$oEmail->send();

//Send email to user
$txtMsg = "Gracias por su información en breve será atendidad,\r\n\r\nSaludos\r\n\r\nRené Buc Morales\r\nservicios@campussur.uvg.edu.gt";
$htmMsg = $htmHead . "<tr><td>Gracias por su información en breve será atendidad,<br><br>Saludos<br><br>René Buc Morales<br>servicios@campussur.uvg.edu.gt</td></tr>" . $htmFoot;
$oEmail = new imEMail("servicios@campussur.uvg.edu.gt",$_POST["Itm_8_04_2"],"Re: Confirmación de solicitud","iso-8859-1");
$oEmail->setText($txtMsg . "\r\n\r\n" . $txtData);
$oEmail->setHTML("<html><body bgcolor=\"#063A69\"><center>" . $htmMsg . "<br>" . $htmHead . $htmData . $htmFoot . "</center></body></html>");
$oEmail->send();
@header("Location: ../index.html");
?>
