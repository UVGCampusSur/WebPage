<?php
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
$txtData .= "Actividad: " . $_POST["Itm_8_00_3"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Actividad:</b></td><td>" . $_POST["Itm_8_00_3"] . "</td></tr>";
$csvData .= $_POST["Itm_8_00_3"] . ";";
$txtData .= "Horario: " . $_POST["Itm_8_00_4"] . "\r\n";
$htmData .= "<tr><td width=\"25%\" bgcolor=\"#EEEEEE\"><b>Horario:</b></td><td bgcolor=\"#EEEEEE\">" . $_POST["Itm_8_00_4"] . "</td></tr>";
$csvData .= $_POST["Itm_8_00_4"] . ";";
$txtData .= "Ubicación: " . $_POST["Itm_8_00_5"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Ubicación:</b></td><td>" . $_POST["Itm_8_00_5"] . "</td></tr>";
$csvData .= $_POST["Itm_8_00_5"] . ";";
$txtData .= "Fecha (dd/mm/aa): " . " " . $_POST["Itm_8_00_6_d"] . " " . $_POST["Itm_8_00_6_m"] . " " . $_POST["Itm_8_00_6_y"] . "\r\n";
$htmData .= "<tr><td width=\"25%\" bgcolor=\"#EEEEEE\"><b>Fecha (dd/mm/aa):</b></td><td bgcolor=\"#EEEEEE\">" . " " . $_POST["Itm_8_00_6_d"] . " " . $_POST["Itm_8_00_6_m"] . " " . $_POST["Itm_8_00_6_y"] . "</td></tr>";
$csvData .= $_POST["Itm_8_00_6_d"] . " " . $_POST["Itm_8_00_6_m"] . " " . $_POST["Itm_8_00_6_y"] . ";";
$txtData .= "Equipo a solicitar: " . ($_POST["Itm_8_00_7_sub_1"]==""?"-":$_POST["Itm_8_00_7_sub_1"]) . ", " . ($_POST["Itm_8_00_7_sub_2"]==""?"-":$_POST["Itm_8_00_7_sub_2"]) . ", " . ($_POST["Itm_8_00_7_sub_3"]==""?"-":$_POST["Itm_8_00_7_sub_3"]) . ", " . ($_POST["Itm_8_00_7_sub_4"]==""?"-":$_POST["Itm_8_00_7_sub_4"]) . ", " . ($_POST["Itm_8_00_7_sub_5"]==""?"-":$_POST["Itm_8_00_7_sub_5"]) . ", " . ($_POST["Itm_8_00_7_sub_6"]==""?"-":$_POST["Itm_8_00_7_sub_6"]) . ", " . ($_POST["Itm_8_00_7_sub_7"]==""?"-":$_POST["Itm_8_00_7_sub_7"]) . ", " . ($_POST["Itm_8_00_7_sub_8"]==""?"-":$_POST["Itm_8_00_7_sub_8"]) . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Equipo a solicitar:</b></td><td>" . ($_POST["Itm_8_00_7_sub_1"]==""?"-":$_POST["Itm_8_00_7_sub_1"]) . ", " . ($_POST["Itm_8_00_7_sub_2"]==""?"-":$_POST["Itm_8_00_7_sub_2"]) . ", " . ($_POST["Itm_8_00_7_sub_3"]==""?"-":$_POST["Itm_8_00_7_sub_3"]) . ", " . ($_POST["Itm_8_00_7_sub_4"]==""?"-":$_POST["Itm_8_00_7_sub_4"]) . ", " . ($_POST["Itm_8_00_7_sub_5"]==""?"-":$_POST["Itm_8_00_7_sub_5"]) . ", " . ($_POST["Itm_8_00_7_sub_6"]==""?"-":$_POST["Itm_8_00_7_sub_6"]) . ", " . ($_POST["Itm_8_00_7_sub_7"]==""?"-":$_POST["Itm_8_00_7_sub_7"]) . ", " . ($_POST["Itm_8_00_7_sub_8"]==""?"-":$_POST["Itm_8_00_7_sub_8"]) . "</td></tr>";
$csvData .= ($_POST["Itm_8_00_7_sub_1"]==""?"-":$_POST["Itm_8_00_7_sub_1"]) . ", " . ($_POST["Itm_8_00_7_sub_2"]==""?"-":$_POST["Itm_8_00_7_sub_2"]) . ", " . ($_POST["Itm_8_00_7_sub_3"]==""?"-":$_POST["Itm_8_00_7_sub_3"]) . ", " . ($_POST["Itm_8_00_7_sub_4"]==""?"-":$_POST["Itm_8_00_7_sub_4"]) . ", " . ($_POST["Itm_8_00_7_sub_5"]==""?"-":$_POST["Itm_8_00_7_sub_5"]) . ", " . ($_POST["Itm_8_00_7_sub_6"]==""?"-":$_POST["Itm_8_00_7_sub_6"]) . ", " . ($_POST["Itm_8_00_7_sub_7"]==""?"-":$_POST["Itm_8_00_7_sub_7"]) . ", " . ($_POST["Itm_8_00_7_sub_8"]==""?"-":$_POST["Itm_8_00_7_sub_8"]) . ";";

// Template
$htmHead = "<table width=\"90%\" border=\"0\" bgcolor=\"#FFFFFF\" cellpadding=\"4\" style=\"font: 11px Tahoma; color: #000000; border: 1px solid #BBBBBB;\">";
$htmFoot = "</table>";

//Send email to owner
$txtMsg = "Solicitud de equipo audiovisual";
$htmMsg = $htmHead . "<tr><td>Solicitud de equipo audiovisual</td></tr>" . $htmFoot;
$oEmail = new imEMail(($imForceSender ? $_POST["Itm_8_00_2"] : "jgrijalva@campussur.uvg.edu.gt"),"jgrijalva@campussur.uvg.edu.gt","Solicitud en linea*","iso-8859-1");
$oEmail->setText($txtMsg . "\r\n\r\n" . $txtData);
$oEmail->setHTML("<html><body bgcolor=\"#063A69\"><center>" . $htmMsg . "<br>" . $htmHead . $htmData . $htmFoot . "<br>" . $htmHead . "<tr><td style=\"font-size: 85%\">" . $csvData . "</td></tr>" . $htmFoot . "</center></body></html>");
$oEmail->send();

//Send email to user
$txtMsg = "Gracias por su información en breve será atendida,\r\n\r\nSaludos\r\n\r\nJosé Grijalva\r\nEncargado de equipos audiovisuales\r\njgrijalva@campussur.uvg.edu.gt\r\n";
$htmMsg = $htmHead . "<tr><td>Gracias por su información en breve será atendida,<br><br>Saludos<br><br>José Grijalva<br>Encargado de equipos audiovisuales<br>jgrijalva@campussur.uvg.edu.gt<br></td></tr>" . $htmFoot;
$oEmail = new imEMail("jgrijalva@campussur.uvg.edu.gt",$_POST["Itm_8_00_2"],"Re: Confirmación de solicitud","iso-8859-1");
$oEmail->setText($txtMsg . "\r\n\r\n" . $txtData);
$oEmail->setHTML("<html><body bgcolor=\"#063A69\"><center>" . $htmMsg . "<br>" . $htmHead . $htmData . $htmFoot . "</center></body></html>");
$oEmail->send();
@header("Location: ../index.html");
?>
