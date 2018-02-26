<?php
include "../res/imemail.inc.php";

//Form Data
$txtData = "";
$htmData = "";
$txtData .= "Nombre del solicitante: " . $_POST["Itm_8_01_1"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Nombre del solicitante:</b></td><td>" . $_POST["Itm_8_01_1"] . "</td></tr>";
$csvData .= $_POST["Itm_8_01_1"] . ";";
$txtData .= "Correo institucional: " . $_POST["Itm_8_01_2"] . "\r\n";
$htmData .= "<tr><td width=\"25%\" bgcolor=\"#EEEEEE\"><b>Correo institucional:</b></td><td bgcolor=\"#EEEEEE\">" . $_POST["Itm_8_01_2"] . "</td></tr>";
$csvData .= $_POST["Itm_8_01_2"] . ";";
$txtData .= "Actividad: " . $_POST["Itm_8_01_3"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Actividad:</b></td><td>" . $_POST["Itm_8_01_3"] . "</td></tr>";
$csvData .= $_POST["Itm_8_01_3"] . ";";
$txtData .= "Horario: " . $_POST["Itm_8_01_4"] . "\r\n";
$htmData .= "<tr><td width=\"25%\" bgcolor=\"#EEEEEE\"><b>Horario:</b></td><td bgcolor=\"#EEEEEE\">" . $_POST["Itm_8_01_4"] . "</td></tr>";
$csvData .= $_POST["Itm_8_01_4"] . ";";
$txtData .= "Fecha (dd/mm/aa): " . " " . $_POST["Itm_8_01_5_d"] . " " . $_POST["Itm_8_01_5_m"] . " " . $_POST["Itm_8_01_5_y"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Fecha (dd/mm/aa):</b></td><td>" . " " . $_POST["Itm_8_01_5_d"] . " " . $_POST["Itm_8_01_5_m"] . " " . $_POST["Itm_8_01_5_y"] . "</td></tr>";
$csvData .= $_POST["Itm_8_01_5_d"] . " " . $_POST["Itm_8_01_5_m"] . " " . $_POST["Itm_8_01_5_y"] . ";";
$txtData .= "Salón a solicitar: " . $_POST["Itm_8_01_6"] . "\r\n";
$htmData .= "<tr><td width=\"25%\" bgcolor=\"#EEEEEE\"><b>Salón a solicitar:</b></td><td bgcolor=\"#EEEEEE\">" . $_POST["Itm_8_01_6"] . "</td></tr>";
$csvData .= $_POST["Itm_8_01_6"] . ";";

// Template
$htmHead = "<table width=\"90%\" border=\"0\" bgcolor=\"#FFFFFF\" cellpadding=\"4\" style=\"font: 11px Tahoma; color: #000000; border: 1px solid #BBBBBB;\">";
$htmFoot = "</table>";

//Send email to owner
$txtMsg = "Solicitud en linea*";
$htmMsg = $htmHead . "<tr><td>Solicitud en linea*</td></tr>" . $htmFoot;
$oEmail = new imEMail(($imForceSender ? $_POST["Itm_8_01_2"] : "soporte@campussur.uvg.edu.gt"),"soporte@campussur.uvg.edu.gt","Solicitud en linea*","iso-8859-1");
$oEmail->setText($txtMsg . "\r\n\r\n" . $txtData);
$oEmail->setHTML("<html><body bgcolor=\"#FFFFFF\"><center>" . $htmMsg . "<br>" . $htmHead . $htmData . $htmFoot . "<br>" . $htmHead . "<tr><td style=\"font-size: 85%\">" . $csvData . "</td></tr>" . $htmFoot . "</center></body></html>");
$oEmail->send();

//Send email to user
$txtMsg = "Gracias por su información en breve será atendida por las personas encargadas,\r\n\r\nSaludos\r\n\r\nClaudia Arteaga\r\ncarteaga@campussur.uvg.edu.gt\r\nLaboratorio D-3\r\n\r\nMardoqueo Charuc\r\nmucharuc@campussur.uvg.edu.gt\r\nLaboratorio CED y Salón Multimedia G101\r\n\r\n\r\nUrbin Santos\r\nusantos@campussur.uvg.edu.gt\r\n*Aula Virtual\r\n\r\nJonathan Díaz\r\njdiaz@campussur.uvg.edu.gt\r\n*Salón Multimedia K1";
$htmMsg = $htmHead . "<tr><td>Gracias por su información en breve será atendida por las personas encargadas,<br><br>Saludos<br><br>Claudia Arteaga<br>carteaga@campussur.uvg.edu.gt<br>Laboratorio D-3<br><br>Mardoqueo Charuc<br>mucharuc@campussur.uvg.edu.gt<br>Laboratorio CED y Salón Multimedia G101<br><br><br>Urbin Santos<br>usantos@campussur.uvg.edu.gt<br>*Aula Virtual<br><br>Jonathan Díaz<br>jdiaz@campussur.uvg.edu.gt<br>*Salón Multimedia K1</td></tr>" . $htmFoot;
$oEmail = new imEMail("soporte@campussur.uvg.edu.gt",$_POST["Itm_8_01_2"],"Re: Confirmación de solicitud","iso-8859-1");
$oEmail->setText($txtMsg . "\r\n\r\n" . $txtData);
$oEmail->setHTML("<html><body bgcolor=\"#FFFFFF\"><center>" . $htmMsg . "<br>" . $htmHead . $htmData . $htmFoot . "</center></body></html>");
$oEmail->send();
@header("Location: ../index.html");
?>
