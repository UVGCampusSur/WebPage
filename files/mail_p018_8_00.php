<?php
//Check Captcha
include("../captcha/imkeys.php");
for ($i=0; $i<5; $i++)
  if ($oCharList[substr($_POST["Itm_8_00_cpf"],$i,1)] != substr($_POST["Itm_8_00_cpv"], $i,1))
    die("Error: Javascript must be enabled! (2)");

include "../res/imemail.inc.php";

//Form Data
$txtData = "";
$htmData = "";
$txtData .= "Nombre del solicitante: " . $_POST["Itm_8_00_1"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Nombre del solicitante:</b></td><td>" . $_POST["Itm_8_00_1"] . "</td></tr>";
$csvData .= $_POST["Itm_8_00_1"] . ";";
$txtData .= "Correo institucional: " . $_POST["Itm_8_00_2"] . "\r\n";
$htmData .= "<tr><td width=\"25%\" bgcolor=\"#EEEEEE\"><b>Correo institucional:</b></td><td bgcolor=\"#EEEEEE\">" . $_POST["Itm_8_00_2"] . "</td></tr>";
$csvData .= $_POST["Itm_8_00_2"] . ";";
$txtData .= "Servicio a solicitar: " . $_POST["Itm_8_00_3"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Servicio a solicitar:</b></td><td>" . $_POST["Itm_8_00_3"] . "</td></tr>";
$csvData .= $_POST["Itm_8_00_3"] . ";";
$txtData .= "Especificar actividad o solicitud: " . $_POST["Itm_8_00_4"] . "\r\n";
$htmData .= "<tr><td width=\"25%\" bgcolor=\"#EEEEEE\"><b>Especificar actividad o solicitud:</b></td><td bgcolor=\"#EEEEEE\">" . $_POST["Itm_8_00_4"] . "</td></tr>";
$csvData .= $_POST["Itm_8_00_4"] . ";";
$txtData .= "Ubicación: " . $_POST["Itm_8_00_5"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Ubicación:</b></td><td>" . $_POST["Itm_8_00_5"] . "</td></tr>";
$csvData .= $_POST["Itm_8_00_5"] . ";";
$txtData .= "Horario: " . $_POST["Itm_8_00_6"] . "\r\n";
$htmData .= "<tr><td width=\"25%\" bgcolor=\"#EEEEEE\"><b>Horario:</b></td><td bgcolor=\"#EEEEEE\">" . $_POST["Itm_8_00_6"] . "</td></tr>";
$csvData .= $_POST["Itm_8_00_6"] . ";";
$txtData .= "Fecha a calendarizar: " . " " . $_POST["Itm_8_00_7_d"] . " " . $_POST["Itm_8_00_7_m"] . " " . $_POST["Itm_8_00_7_y"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Fecha a calendarizar:</b></td><td>" . " " . $_POST["Itm_8_00_7_d"] . " " . $_POST["Itm_8_00_7_m"] . " " . $_POST["Itm_8_00_7_y"] . "</td></tr>";
$csvData .= $_POST["Itm_8_00_7_d"] . " " . $_POST["Itm_8_00_7_m"] . " " . $_POST["Itm_8_00_7_y"] . ";";
$txtData .= "Equipo a requerir: " . ($_POST["Itm_8_00_8_sub_1"]==""?"-":$_POST["Itm_8_00_8_sub_1"]) . ", " . ($_POST["Itm_8_00_8_sub_2"]==""?"-":$_POST["Itm_8_00_8_sub_2"]) . ", " . ($_POST["Itm_8_00_8_sub_3"]==""?"-":$_POST["Itm_8_00_8_sub_3"]) . ", " . ($_POST["Itm_8_00_8_sub_4"]==""?"-":$_POST["Itm_8_00_8_sub_4"]) . ", " . ($_POST["Itm_8_00_8_sub_5"]==""?"-":$_POST["Itm_8_00_8_sub_5"]) . ", " . ($_POST["Itm_8_00_8_sub_6"]==""?"-":$_POST["Itm_8_00_8_sub_6"]) . ", " . ($_POST["Itm_8_00_8_sub_7"]==""?"-":$_POST["Itm_8_00_8_sub_7"]) . "\r\n";
$htmData .= "<tr><td width=\"25%\" bgcolor=\"#EEEEEE\"><b>Equipo a requerir:</b></td><td bgcolor=\"#EEEEEE\">" . ($_POST["Itm_8_00_8_sub_1"]==""?"-":$_POST["Itm_8_00_8_sub_1"]) . ", " . ($_POST["Itm_8_00_8_sub_2"]==""?"-":$_POST["Itm_8_00_8_sub_2"]) . ", " . ($_POST["Itm_8_00_8_sub_3"]==""?"-":$_POST["Itm_8_00_8_sub_3"]) . ", " . ($_POST["Itm_8_00_8_sub_4"]==""?"-":$_POST["Itm_8_00_8_sub_4"]) . ", " . ($_POST["Itm_8_00_8_sub_5"]==""?"-":$_POST["Itm_8_00_8_sub_5"]) . ", " . ($_POST["Itm_8_00_8_sub_6"]==""?"-":$_POST["Itm_8_00_8_sub_6"]) . ", " . ($_POST["Itm_8_00_8_sub_7"]==""?"-":$_POST["Itm_8_00_8_sub_7"]) . "</td></tr>";
$csvData .= ($_POST["Itm_8_00_8_sub_1"]==""?"-":$_POST["Itm_8_00_8_sub_1"]) . ", " . ($_POST["Itm_8_00_8_sub_2"]==""?"-":$_POST["Itm_8_00_8_sub_2"]) . ", " . ($_POST["Itm_8_00_8_sub_3"]==""?"-":$_POST["Itm_8_00_8_sub_3"]) . ", " . ($_POST["Itm_8_00_8_sub_4"]==""?"-":$_POST["Itm_8_00_8_sub_4"]) . ", " . ($_POST["Itm_8_00_8_sub_5"]==""?"-":$_POST["Itm_8_00_8_sub_5"]) . ", " . ($_POST["Itm_8_00_8_sub_6"]==""?"-":$_POST["Itm_8_00_8_sub_6"]) . ", " . ($_POST["Itm_8_00_8_sub_7"]==""?"-":$_POST["Itm_8_00_8_sub_7"]) . ";";
$txtData .= "Programa académico: " . $_POST["Itm_8_00_9"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Programa académico:</b></td><td>" . $_POST["Itm_8_00_9"] . "</td></tr>";
$csvData .= $_POST["Itm_8_00_9"] . ";";

// Template
$htmHead = "<table width=\"90%\" border=\"0\" bgcolor=\"#FFFFFF\" cellpadding=\"4\" style=\"font: 11px Tahoma; color: #000000; border: 1px solid #BBBBBB;\">";
$htmFoot = "</table>";

//Send email to owner
$txtMsg = "";
$htmMsg = $htmHead . "<tr><td></td></tr>" . $htmFoot;
$oEmail = new imEMail(($imForceSender ? $_POST["Itm_8_00_2"] : "soporte@campussur.uvg.edu.gt"),"soporte@campussur.uvg.edu.gt","Solicitud en linea*","iso-8859-1");
$oEmail->setText($txtMsg . "\r\n\r\n" . $txtData);
$oEmail->setHTML("<html><body bgcolor=\"#FFFFFF\"><center>" . $htmMsg . "<br>" . $htmHead . $htmData . $htmFoot . "<br>" . $htmHead . "<tr><td style=\"font-size: 85%\">" . $csvData . "</td></tr>" . $htmFoot . "</center></body></html>");
$oEmail->send();

//Send email to user
$txtMsg = "Gracias por su información en breve será atendida por las personas encargadas.\r\n\r\nSaludos.";
$htmMsg = $htmHead . "<tr><td>Gracias por su información en breve será atendida por las personas encargadas.<br><br>Saludos.</td></tr>" . $htmFoot;
$oEmail = new imEMail("soporte@campussur.uvg.edu.gt",$_POST["Itm_8_00_2"],"Re: Confirmación de solicitud","iso-8859-1");
$oEmail->setText($txtMsg . "\r\n\r\n" . $txtData);
$oEmail->setHTML("<html><body bgcolor=\"#FFFFFF\"><center>" . $htmMsg . "<br>" . $htmHead . $htmData . $htmFoot . "</center></body></html>");
$oEmail->send();
@header("Location: ../index.html");
?>
