<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es" dir="ltr">
<head>
	<title>Buscar</title>

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
	
	<script type="text/javascript">imCodeProt('Webmaster 2012')</script>
	<link rel="stylesheet" type="text/css" href="res/handheld.css" media="handheld" />
	<link rel="alternate stylesheet" title="Alto contraste - Accesibilidad" type="text/css" href="res/accessibility.css" media="screen" />

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
$files = array("index.html","crea_uvg.html","nosotros.html","admisiones.html","facultadingenieria.html","servicios.html","centro_de_idiomas.html","educon.html","radio_uvg.html","museo.html","informes.html","vida_estudiantil.html","mas_informacion_museo.html","ayuda_financiera.html","neo.html","solicitudesenlinea.html","aeuvgsur.html","sife_uvgsur.html","clubfemenino.html","fundacion_pantaleon.html","formulariobecas.html","facultadeducacion.html");
?>
<div id="imSText">
<?php
	$domain = "";
	$search = trim($_GET['search']);
	$page = $_GET['page'];
	if($page == "")
		$page = 0;
	else
		$page--;
	if($search != "") {
		$queries = explode(" ",$search);
		foreach($files as $filename) {
			$count = 0;
			$weight = 0;
			$file_content = implode("\n",file($filename));
			$starttitle = strpos($file_content,"<title>") + 7;
			$endtitle = strpos($file_content,"</title>");
			if(($starttitle != false) && ($endtitle != false)) {
				foreach($queries as $query) {
					$title = substr($file_content,$starttitle,$endtitle-$starttitle);
					while (($title = stristr($title, $query)) !== false) {
						$weight += 4;
						$title = substr($title,strlen($query));
					}
				}
			}
			$page_pos = strpos($file_content,"<!-- Page START -->")+19;
			$page_end = strpos($file_content,"<!-- Page END -->");
			if($page_pos != false && $page_end != false)
				$file_content = substr($file_content,$page_pos, $page_end-$page_pos);
			$file_content = strip_tags($file_content);
			foreach($queries as $query) {
				$file = $file_content;
				while (($file = stristr($file, $query)) !== false) {
					$count++;
					$weight++;
					$file = substr($file,strlen($query));
				}
			}
			if($count > 0) {
				$found_count[$filename] = $count;
				$found_weight[$filename] = $weight;
			}
		}
		
		if($found_count != null) {
			arsort($found_weight);
			$i = 0;
			$pagine = ceil(count($found_count)/10);
			if(($page >= $pagine) || ($page < 0))
				$page = 0;
			echo "		<div class=\"imSLabel\"><div id=\"imSPageTitle\"><strong>Encontrado</strong> para <i>". $search ."</i></div><strong>" . ($page*10+1) . "-" . (count($found_count)<($page+1)*10? count($found_count):($page+1)*10) . "</strong> para <strong>"  . count($found_count) . "</strong></div>\n";
			foreach($found_weight as $name => $weight) {
				$count = $found_count[$name];
				$i++;
				if(($i > $page*10) && ($i <= ($page+1)*10)) {
					$file = implode(" ",file($name));
					$starttitle = strpos($file,"<title>") + 7;
					$endtitle = strpos($file,"</title>");
					if(($starttitle != false) && ($endtitle != false))
						$title = substr($file,$starttitle,$endtitle-$starttitle);
					else
						$title = $name;
					$page_pos = strpos($file,"<!-- Page START -->")+19;
					$page_end = strpos($file,"<!-- Page END -->");
					if($page_pos != false && $page_end != false)
						$file = substr($file,$page_pos, $page_end-$page_pos);
					$file = strip_tags($file);
					$ap = 0;
					$filelen = strlen($file);
					$text = "";
					for($j=0;$j<($count > 6 ? 6 : $count);$j++) {
						$minpos = $filelen;
						foreach($queries as $query) {
							if(($pos = strpos(strtoupper($file),strtoupper($query),$ap)) !== false) {
								if($pos < $minpos) {
									$minpos = $pos;
									$word = $query;
								}
							}
						}
						$prev = explode(" ",substr($file,$ap,$minpos-$ap));
						if(count($prev) > ($ap > 0 ? 9 : 8))
							$prev = ($ap > 0 ? implode(" ",array_slice($prev,0,8)) : "") . " ... " . implode(" ",array_slice($prev,-8));
						else
							$prev = implode(" ",$prev);
						$text .= $prev . "<strong>" . substr($file,$minpos,strlen($word)) . "</strong> ";
						$ap = $minpos + strlen($word);
					}
					$next = explode(" ",substr($file,$ap));
					if(count($next) > 9)
						$text .= implode(" ",array_slice($next,0,8)) . "...";
					else
						$text .= implode(" ",$next);
					echo "			<div class=\"imSTitle\"><a href=\"" . $name . "\">" . $title . "</a> <span class=\"imSCount\">(" . $count . " " . ($count > 1 ? "Resultados" : "Resultado") . ")</span></div>" . $text . "<div class=\"imSLink\"><a href=\"" . $name . "\">" . $domain . $name . "</a></div>\n";
				}
			}
			echo "  <div class=\"imSLabel\">&nbsp;</div>\n";
			if ($pagine > 1) {
				echo "			Página ";
				for($i = 1; $i <= $pagine; $i++)
					if($i != $page+1)
						echo "<a href=\"imsearch.php?search=" . $search . "&page=" . $i . "\">" . $i . "</a> ";
					else
						echo "<strong>" . $i . "</strong> ";
				echo "\n";
			}
		}
		else
			echo "  <div style=\"text-align: center; font-weight: bold; \"><strong>No encontrado</strong></div>\n";
	}
?>
</div>
<div id="imSBox">
<form action="imsearch.php" method="get"><fieldset>
	<input type="text" name="search" value="<?php echo $_GET['search']; ?>"/> <input id="imSButton" type="submit" value="Buscar" />
</fieldset></form>
</div>
<br />

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
