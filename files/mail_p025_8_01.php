<?php
include "../res/imemail.inc.php";

//Form Data
$txtData = "";
$htmData = "";
$txtData .= "Nombre del solicitante: " . $_POST["Itm_8_01_1"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Nombre del solicitante:</b></td><td>" . $_POST["Itm_8_01_1"] . "</td></tr>";
$csvData .= $_POST["Itm_8_01_1"] . ";";
$txtData .= "Correo electr�nico: " . $_POST["Itm_8_01_2"] . "\r\n";
$htmData .= "<tr><td width=\"25%\" bgcolor=\"#EEEEEE\"><b>Correo electr�nico:</b></td><td bgcolor=\"#EEEEEE\">" . $_POST["Itm_8_01_2"] . "</td></tr>";
$csvData .= $_POST["Itm_8_01_2"] . ";";
$txtData .= "Actividad y horario: " . $_POST["Itm_8_01_3"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Actividad y horario:</b></td><td>" . $_POST["Itm_8_01_3"] . "</td></tr>";
$csvData .= $_POST["Itm_8_01_3"] . ";";
$txtData .= "Ubicaci�n: " . $_POST["Itm_8_01_4"] . "\r\n";
$htmData .= "<tr><td width=\"25%\" bgcolor=\"#EEEEEE\"><b>Ubicaci�n:</b></td><td bgcolor=\"#EEEEEE\">" . $_POST["Itm_8_01_4"] . "</td></tr>";
$csvData .= $_POST["Itm_8_01_4"] . ";";
$txtData .= "Fecha cuando se necesita (dd/mm/aa): " . " " . $_POST["Itm_8_01_5_d"] . " " . $_POST["Itm_8_01_5_m"] . " " . $_POST["Itm_8_01_5_y"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Fecha cuando se necesita (dd/mm/aa):</b></td><td>" . " " . $_POST["Itm_8_01_5_d"] . " " . $_POST["Itm_8_01_5_m"] . " " . $_POST["Itm_8_01_5_y"] . "</td></tr>";
$csvData .= $_POST["Itm_8_01_5_d"] . " " . $_POST["Itm_8_01_5_m"] . " " . $_POST["Itm_8_01_5_y"] . ";";
$txtData .= "Programa: " . $_POST["Itm_8_01_6"] . "\r\n";
$htmData .= "<tr><td width=\"25%\" bgcolor=\"#EEEEEE\"><b>Programa:</b></td><td bgcolor=\"#EEEEEE\">" . $_POST["Itm_8_01_6"] . "</td></tr>";
$csvData .= $_POST["Itm_8_01_6"] . ";";

// Template
$htmHead = "<table width=\"90%\" border=\"0\" bgcolor=\"#FFFFFF\" cellpadding=\"4\" style=\"font: 11px Tahoma; color: #000000; border: 1px solid #BBBBBB;\">";
$htmFoot = "</table>";

//Send email to owner
$txtMsg = "Solicitud de servicios en l�nea - Informatica -";
$htmMsg = $htmHead . "<tr><td>Solicitud de servicios en l�nea - Informatica -</td></tr>" . $htmFoot;
$oEmail = new imEMail(($imForceSender ? $_POST["Itm_8_01_2"] : "esanchez@proesur.uvg.edu.gt"),"esanchez@proesur.uvg.edu.gt","Solicitud de servicios en l�nea","iso-8859-1");
$oEmail->setText($txtMsg . "\r\n\r\n" . $txtData);
$oEmail->setHTML("<html><body bgcolor=\"#063A69\"><center>" . $htmMsg . "<br>" . $htmHead . $htmData . $htmFoot . "<br>" . $htmHead . "<tr><td style=\"font-size: 85%\">" . $csvData . "</td></tr>" . $htmFoot . "</center></body></html>");
$oEmail->send();

//Send email to user
$txtMsg = "Gracias por su informaci�n en breve ser� atendida,\r\n\r\nEdwin S�nchez\r\nesanchez@proesur.uvg.edu.gt\r\n";
$htmMsg = $htmHead . "<tr><td>Gracias por su informaci�n en breve ser� atendida,<br><br>Edwin S�nchez<br>esanchez@proesur.uvg.edu.gt<br></td></tr>" . $htmFoot;
$oEmail = new imEMail("esanchez@proesur.uvg.edu.gt",$_POST["Itm_8_01_2"],"Re: Confirmaci�n de solicitud","iso-8859-1");
$oEmail->setText($txtMsg . "\r\n\r\n" . $txtData);
$oEmail->setHTML("<html><body bgcolor=\"#063A69\"><center>" . $htmMsg . "<br>" . $htmHead . $htmData . $htmFoot . "</center></body></html>");
$oEmail->send();
@header("Location: ../index.html");
?>
