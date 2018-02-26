<?php
include("res/login.php");
$iIndex = explode("|",$area_indexes);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es" dir="ltr">
<head>
	<title>Área reservada</title>

	<!-- Contents -->
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="Content-Language" content="es" />
	<meta http-equiv="last-modified" content="02/05/2012 11:17:15" />
	<meta http-equiv="Content-Type-Script" content="text/javascript" />
	<meta name="description" content="Universidad del Valle de Guatemala, Colegio Americano del Sur, Centro de Idiomas, Instituto Tecnológico, Radio UVG, Educon, Museo de las Culturas, Educación, Colegio, Instituto, UVG Campus Sur, UVG, PROESUR, Facultades, Vida Estudiantil, Ayuda Financiera, Servicios, Campus, Guatemala" />
	<meta name="keywords" content="Universidad del Valle de Guatemala, Colegio Americano del Sur, Centro de Idiomas, Instituto Tecnológico, Radio UVG, Educon, Museo de las Culturas, Educación, Colegio, Instituto, UVG Campus Sur, UVG, PROESUR, Facultades, Vida Estudiantil, Ayuda Financiera, Servicios, Campus, Guatemala" />
	<!-- imCustomHead -->
	<meta http-equiv="Expires" content="0" />
	<meta name="Resource-Type" content="document" />
	<meta name="Distribution" content="global" />
	<meta name="Robots" content="index, follow" />
	<meta name="Revisit-After" content="21 days" />
	<meta name="Rating" content="general" />
	<!-- Others -->
	<meta name="Author" content="Webmaster" />
	<meta name="Generator" content="Incomedia WebSite X5 Evolution Evolution 8.0.9 - www.websitex5.com" />
	<meta http-equiv="ImageToolbar" content="False" />
	<meta name="MSSmartTagsPreventParsing" content="True" />
	<link rel="Shortcut Icon" href="res/favicon.ico" type="image/x-icon" />
	
	<!-- Parent -->
	<link rel="sitemap" href="imsitemap.html" title="Mapa general del sitio" />
	<!-- Res -->
	<script type="text/javascript" src="res/x5engine.js"></script>
	<link rel="stylesheet" type="text/css" href="res/styles.css" media="screen, print" />
	<link rel="stylesheet" type="text/css" href="res/template.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="res/print.css" media="print" />
	<!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="res/iebehavior.css" media="screen" /><![endif]-->
	<!-- imPageCSS -->
	<script type="text/javascript">imCodeProt('Webmaster 2012')</script>
	<link rel="stylesheet" type="text/css" href="res/handheld.css" media="handheld" />
	<link rel="alternate stylesheet" title="Alto contraste - Accesibilidad" type="text/css" href="res/accessibility.css" media="screen" />
<!-- imCustomCode -->
</head>
<body>
<div id="imSite">
<div id="imHeader">
	
	<h1>UVG Campus Sur</h1>
<div id="imMEObj_10" style="left: 26px; top: 125px; width: 67px; height: 16px;" onclick="imOpenLocation('nosotros.html')" ></div>
<div id="imMEObj_20" style="left: 152px; top: 125px; width: 161px; height: 16px;" onclick="imOpenLocation('facultadingenieria.html')" ></div>
<div id="imMEObj_30" style="left: 621px; top: 125px; width: 118px; height: 16px;" onclick="imOpenLocation('vida_estudiantil.html')" ></div>
<div id="imMEObj_40" style="left: 1007px; top: 126px; width: 68px; height: 16px;" onclick="imOpenLocation('servicios.html')" ></div>
<div id="imMEObj_50" style="left: 809px; top: 125px; width: 126px; height: 16px;" onclick="imOpenLocation('ayuda_financiera.html')" ></div>
<div id="imMEObj_60" style="left: 373px; top: 125px; width: 161px; height: 16px;" onclick="imOpenLocation('facultadeducacion.html')" ></div>
</div>
<div class="imInvisible">
<hr />
<a href="#imGoToCont" title="Saltar el menú principal">Ir al Contenido</a>
</div>
<div id="imBody">
	<div id="imMenuMain">

<!-- Menu START -->
<a name="imGoToMenu"></a><p class="imInvisible">Menú Principal:</p>
<div id="imMnMn">
<ul>
	<li><a href="centro_de_idiomas.html" title="">Centro de Idiomas</a></li>
	<li><a href="educon.html" title="">EDUCON</a></li>
	<li><a href="radio_uvg.html" title="">Radio UVG</a></li>
	<li><a href="museo.html" title="">Museo</a></li>
	<li><a href="crea_uvg.html" title="">CREA UVG</a></li>
	<li><a href="fundacion_pantaleon.html" title="">Fundación Pantaleón</a></li>
</ul>
</div>
<!-- Menu END -->

	</div>
<hr class="imInvisible" />
<a name="imGoToCont"></a>
	<div id="imContent">
<?php
echo "<h2>" . $area_settings[$iIndex[0]-1][0] . "</h2>\n";
echo "<div id=\"imLockTxt\">" . $area_settings[$iIndex[0]-1][1] . "<br />\n";
?>
<form id="imLockForm" action="imlogin.php" method="post">
<?php
if($session_error == true)
   echo "<span id=\"imLockAlert\">" . $local_string[4] . "</span><br />";
?>
<span class="imLockLabel"><?php echo $local_string[0]; ?></span><input class="imLockFld" type="text" name="user" /><br />
<span class="imLockLabel"><?php echo $local_string[1]; ?></span><input class="imLockFld" type="password" name="psw" /><br />
<input class="imLockBtn" type="submit" name="Submit" value="<?php echo $local_string[2]; ?>" />
<?php
if ($area_settings[$iIndex[0]-1][2] != "")
   echo "      <input class=\"imLockBtn\" type=\"button\" value=\"" . $local_string[3] . "\" onclick=\"window.location='" . $area_settings[$iIndex[0]-1][2] . "'\" />\n";
?>
</form>
</div>

	</div>
	<div id="imFooter">
	</div>
</div>
</div>
<div class="imInvisible">
<hr />
<a href="#imGoToCont" title="Leer esta página de nuevo">Regresar al contenido</a> | <a href="#imGoToMenu" title="Leer este sitio de nuevo">Regresar al menú principal</a>
</div>


<div id="imShowBoxBG" style="display: none;" onclick="imShowBoxHide()"></div>
<div id="imShowBoxContainer" style="display: none;" onclick="imShowBoxHide()"><div id="imShowBox" style="height: 200px; width: 200px;"></div></div>
<div id="imBGSound"></div>
<div id="imToolTip"><script type="text/javascript">var imt = new IMTip;</script></div>
</body>
</html>
