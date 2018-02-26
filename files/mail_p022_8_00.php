<?php
include "../res/imemail.inc.php";

//Form Data
$txtData = "";
$htmData = "";
$txtData .= "Nombre del estudiante: " . $_POST["Itm_8_00_1"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Nombre del estudiante:</b></td><td>" . $_POST["Itm_8_00_1"] . "</td></tr>";
$csvData .= $_POST["Itm_8_00_1"] . ";";
$txtData .= "Grado: " . $_POST["Itm_8_00_2"] . "\r\n";
$htmData .= "<tr><td width=\"25%\" bgcolor=\"#EEEEEE\"><b>Grado:</b></td><td bgcolor=\"#EEEEEE\">" . $_POST["Itm_8_00_2"] . "</td></tr>";
$csvData .= $_POST["Itm_8_00_2"] . ";";
$txtData .= "Becado desde: " . " " . $_POST["Itm_8_00_3_d"] . " " . $_POST["Itm_8_00_3_m"] . " " . $_POST["Itm_8_00_3_y"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Becado desde:</b></td><td>" . " " . $_POST["Itm_8_00_3_d"] . " " . $_POST["Itm_8_00_3_m"] . " " . $_POST["Itm_8_00_3_y"] . "</td></tr>";
$csvData .= $_POST["Itm_8_00_3_d"] . " " . $_POST["Itm_8_00_3_m"] . " " . $_POST["Itm_8_00_3_y"] . ";";
$txtData .= "Número telefónico: " . $_POST["Itm_8_00_4"] . "\r\n";
$htmData .= "<tr><td width=\"25%\" bgcolor=\"#EEEEEE\"><b>Número telefónico:</b></td><td bgcolor=\"#EEEEEE\">" . $_POST["Itm_8_00_4"] . "</td></tr>";
$csvData .= $_POST["Itm_8_00_4"] . ";";
$txtData .= "E-mail: " . $_POST["Itm_8_00_5"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>E-mail:</b></td><td>" . $_POST["Itm_8_00_5"] . "</td></tr>";
$csvData .= $_POST["Itm_8_00_5"] . ";";
$txtData .= "Nombre del padre: " . $_POST["Itm_8_00_6"] . "\r\n";
$htmData .= "<tr><td width=\"25%\" bgcolor=\"#EEEEEE\"><b>Nombre del padre:</b></td><td bgcolor=\"#EEEEEE\">" . $_POST["Itm_8_00_6"] . "</td></tr>";
$csvData .= $_POST["Itm_8_00_6"] . ";";
$txtData .= "Nombre de la madre: " . $_POST["Itm_8_00_7"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Nombre de la madre:</b></td><td>" . $_POST["Itm_8_00_7"] . "</td></tr>";
$csvData .= $_POST["Itm_8_00_7"] . ";";
$txtData .= "Que significa para ti EDUCACION: " . $_POST["Itm_8_00_8"] . "\r\n";
$htmData .= "<tr><td width=\"25%\" bgcolor=\"#EEEEEE\"><b>Que significa para ti EDUCACION:</b></td><td bgcolor=\"#EEEEEE\">" . $_POST["Itm_8_00_8"] . "</td></tr>";
$csvData .= $_POST["Itm_8_00_8"] . ";";
$txtData .= "Logros alcanzados académicamente: " . $_POST["Itm_8_00_9"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Logros alcanzados académicamente:</b></td><td>" . $_POST["Itm_8_00_9"] . "</td></tr>";
$csvData .= $_POST["Itm_8_00_9"] . ";";
$txtData .= "Organizaciones, equipos u otros al que perteneza: " . $_POST["Itm_8_00_10"] . "\r\n";
$htmData .= "<tr><td width=\"25%\" bgcolor=\"#EEEEEE\"><b>Organizaciones, equipos u otros al que perteneza:</b></td><td bgcolor=\"#EEEEEE\">" . $_POST["Itm_8_00_10"] . "</td></tr>";
$csvData .= $_POST["Itm_8_00_10"] . ";";
$txtData .= "Reseña Familiar (como es tu familia): " . $_POST["Itm_8_00_11"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Reseña Familiar (como es tu familia):</b></td><td>" . $_POST["Itm_8_00_11"] . "</td></tr>";
$csvData .= $_POST["Itm_8_00_11"] . ";";
$txtData .= "Fecha de inicio de estudios en Campus Sur: " . " " . $_POST["Itm_8_00_12_d"] . " " . $_POST["Itm_8_00_12_m"] . " " . $_POST["Itm_8_00_12_y"] . "\r\n";
$htmData .= "<tr><td width=\"25%\" bgcolor=\"#EEEEEE\"><b>Fecha de inicio de estudios en Campus Sur:</b></td><td bgcolor=\"#EEEEEE\">" . " " . $_POST["Itm_8_00_12_d"] . " " . $_POST["Itm_8_00_12_m"] . " " . $_POST["Itm_8_00_12_y"] . "</td></tr>";
$csvData .= $_POST["Itm_8_00_12_d"] . " " . $_POST["Itm_8_00_12_m"] . " " . $_POST["Itm_8_00_12_y"] . ";";
$txtData .= "Que carrera te gustaria seguir estudiando en la universidad: " . $_POST["Itm_8_00_13"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Que carrera te gustaria seguir estudiando en la universidad:</b></td><td>" . $_POST["Itm_8_00_13"] . "</td></tr>";
$csvData .= $_POST["Itm_8_00_13"] . ";";
$txtData .= "Como ha cambiado tu vida, estudiar en UVG SUR: " . $_POST["Itm_8_00_14"] . "\r\n";
$htmData .= "<tr><td width=\"25%\" bgcolor=\"#EEEEEE\"><b>Como ha cambiado tu vida, estudiar en UVG SUR:</b></td><td bgcolor=\"#EEEEEE\">" . $_POST["Itm_8_00_14"] . "</td></tr>";
$csvData .= $_POST["Itm_8_00_14"] . ";";
$txtData .= "Cuéntanos alguna experiencia importante o destacada en tu vida académica: " . $_POST["Itm_8_00_15"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Cuéntanos alguna experiencia importante o destacada en tu vida académica:</b></td><td>" . $_POST["Itm_8_00_15"] . "</td></tr>";
$csvData .= $_POST["Itm_8_00_15"] . ";";
$txtData .= "Cuéntanos alguna problemática que enfrentes en tu vida académica: " . $_POST["Itm_8_00_16"] . "\r\n";
$htmData .= "<tr><td width=\"25%\" bgcolor=\"#EEEEEE\"><b>Cuéntanos alguna problemática que enfrentes en tu vida académica:</b></td><td bgcolor=\"#EEEEEE\">" . $_POST["Itm_8_00_16"] . "</td></tr>";
$csvData .= $_POST["Itm_8_00_16"] . ";";
$txtData .= "Mensaje de agradecimiento: " . $_POST["Itm_8_00_17"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Mensaje de agradecimiento:</b></td><td>" . $_POST["Itm_8_00_17"] . "</td></tr>";
$csvData .= $_POST["Itm_8_00_17"] . ";";

// Template
$htmHead = "<table width=\"90%\" border=\"0\" bgcolor=\"#FFFFFF\" cellpadding=\"4\" style=\"font: 11px Tahoma; color: #000000; border: 1px solid #BBBBBB;\">";
$htmFoot = "</table>";

//Send email to owner
$txtMsg = "";
$htmMsg = $htmHead . "<tr><td></td></tr>" . $htmFoot;
$oEmail = new imEMail(($imForceSender ? $_POST["Itm_8_00_5"] : "acastillo@campussur.uvg.edu.gt"),"acastillo@campussur.uvg.edu.gt","Formulario de becas en linea","iso-8859-1");
$oEmail->setText($txtMsg . "\r\n\r\n" . $txtData);
$oEmail->setHTML("<html><body bgcolor=\"#FFFFFF\"><center>" . $htmMsg . "<br>" . $htmHead . $htmData . $htmFoot . "<br>" . $htmHead . "<tr><td style=\"font-size: 85%\">" . $csvData . "</td></tr>" . $htmFoot . "</center></body></html>");
$oEmail->send();

//Send email to user
$txtMsg = "Muchas gracias por su información.\r\n\r\nSaludos.";
$htmMsg = $htmHead . "<tr><td>Muchas gracias por su información.<br><br>Saludos.</td></tr>" . $htmFoot;
$oEmail = new imEMail("acastillo@campussur.uvg.edu.gt",$_POST["Itm_8_00_5"],"Re: Formulario de becas en linea","iso-8859-1");
$oEmail->setText($txtMsg . "\r\n\r\n" . $txtData);
$oEmail->setHTML("<html><body bgcolor=\"#FFFFFF\"><center>" . $htmMsg . "<br>" . $htmHead . $htmData . $htmFoot . "</center></body></html>");
$oEmail->send();
@header("Location: ../index.html");
?>
