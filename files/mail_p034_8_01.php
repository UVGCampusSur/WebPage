<?php
include "../res/imemail.inc.php";

//Form Data
$txtData = "";
$htmData = "";
$txtData .= "Mensajes a cabina: " . $_POST["Itm_8_01_1"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Mensajes a cabina:</b></td><td>" . $_POST["Itm_8_01_1"] . "</td></tr>";
$txtData .= "Email:: " . $_POST["Itm_8_01_2"] . "\r\n";
$htmData .= "<tr><td width=\"25%\" bgcolor=\"#EEEEEE\"><b>Email::</b></td><td bgcolor=\"#EEEEEE\">" . $_POST["Itm_8_01_2"] . "</td></tr>";

// Template
$htmHead = "<table width=\"90%\" border=\"0\" bgcolor=\"#FFFFFF\" cellpadding=\"4\" style=\"font: 11px Tahoma; color: #000000; border: 1px solid #BBBBBB;\">";
$htmFoot = "</table>";

//Send email to owner
$txtMsg = "";
$htmMsg = $htmHead . "<tr><td></td></tr>" . $htmFoot;
$oEmail = new imEMail("radiouvg@proesur.uvg.edu.gt","radiouvg@proesur.uvg.edu.gt","Mensajes a Radio UVG","iso-8859-1");
$oEmail->setText($txtMsg . "\r\n\r\n" . $txtData);
$oEmail->setHTML("<html><body bgcolor=\"#063A69\"><center>" . $htmMsg . "<br>" . $htmHead . $htmData . $htmFoot . "</center></body></html>");
$oEmail->send();

@header("Location: ../index.html");
?>
