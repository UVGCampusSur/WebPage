<?php
include "../res/imemail.inc.php";

//Form Data
$txtData = "";
$htmData = "";
$txtData .= "Nombre del solicitante: " . $_POST["Itm_8_03_1"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Nombre del solicitante:</b></td><td>" . $_POST["Itm_8_03_1"] . "</td></tr>";
$csvData .= $_POST["Itm_8_03_1"] . ";";
$txtData .= "Correo institucional: " . $_POST["Itm_8_03_2"] . "\r\n";
$htmData .= "<tr><td width=\"25%\" bgcolor=\"#EEEEEE\"><b>Correo institucional:</b></td><td bgcolor=\"#EEEEEE\">" . $_POST["Itm_8_03_2"] . "</td></tr>";
$csvData .= $_POST["Itm_8_03_2"] . ";";
$txtData .= "Descripci�n de la falla: " . $_POST["Itm_8_03_3"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Descripci�n de la falla:</b></td><td>" . $_POST["Itm_8_03_3"] . "</td></tr>";
$csvData .= $_POST["Itm_8_03_3"] . ";";
$txtData .= "Ubicaci�n: " . $_POST["Itm_8_03_4"] . "\r\n";
$htmData .= "<tr><td width=\"25%\" bgcolor=\"#EEEEEE\"><b>Ubicaci�n:</b></td><td bgcolor=\"#EEEEEE\">" . $_POST["Itm_8_03_4"] . "</td></tr>";
$csvData .= $_POST["Itm_8_03_4"] . ";";
$txtData .= "Programa acad�mico: " . $_POST["Itm_8_03_5"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Programa acad�mico:</b></td><td>" . $_POST["Itm_8_03_5"] . "</td></tr>";
$csvData .= $_POST["Itm_8_03_5"] . ";";

// Template
$htmHead = "<table width=\"90%\" border=\"0\" bgcolor=\"#FFFFFF\" cellpadding=\"4\" style=\"font: 11px Tahoma; color: #000000; border: 1px solid #BBBBBB;\">";
$htmFoot = "</table>";

//Send email to owner
$txtMsg = "Solicitud de soporte t�cnico";
$htmMsg = $htmHead . "<tr><td>Solicitud de soporte t�cnico</td></tr>" . $htmFoot;
$oEmail = new imEMail(($imForceSender ? $_POST["Itm_8_03_2"] : "soporte@campussur.uvg.edu.gt"),"soporte@campussur.uvg.edu.gt","Solicitud en linea","iso-8859-1");
$oEmail->setText($txtMsg . "\r\n\r\n" . $txtData);
$oEmail->setHTML("<html><body bgcolor=\"#FFFFFF\"><center>" . $htmMsg . "<br>" . $htmHead . $htmData . $htmFoot . "<br>" . $htmHead . "<tr><td style=\"font-size: 85%\">" . $csvData . "</td></tr>" . $htmFoot . "</center></body></html>");
$oEmail->send();

//Send email to user
$txtMsg = "Gracias por su informaci�n en breve ser� atendida,\r\n\r\nSaludos,\r\n\r\nEdgar Amaya\r\nsoporte@campussur.uvg.edu.gt";
$htmMsg = $htmHead . "<tr><td>Gracias por su informaci�n en breve ser� atendida,<br><br>Saludos,<br><br>Edgar Amaya<br>soporte@campussur.uvg.edu.gt</td></tr>" . $htmFoot;
$oEmail = new imEMail("soporte@campussur.uvg.edu.gt",$_POST["Itm_8_03_2"],"Re: Confirmaci�n de solicitud","iso-8859-1");
$oEmail->setText($txtMsg . "\r\n\r\n" . $txtData);
$oEmail->setHTML("<html><body bgcolor=\"#FFFFFF\"><center>" . $htmMsg . "<br>" . $htmHead . $htmData . $htmFoot . "</center></body></html>");
$oEmail->send();
@header("Location: ../index.html");
?>
