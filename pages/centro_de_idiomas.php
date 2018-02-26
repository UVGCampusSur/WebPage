<!DOCTYPE html>
<html>
<head>
	<?php include 'Google_analytics.php' ?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<meta http-equiv="Content-Language" content="es" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="Content-Type-Script" content="text/javascript" />
	<meta name="description" content="El Centro de Idiomas brinda su enseñanza con docentes altamente calificados a través de cursos corportativos y cursos regulares en diferentes niveles." />
	<meta name="keywords" content="Centro de Idiomas" />
	<meta property="title" content="Centro de Idiomas" />
	<meta property="description" content="Nuestra Visión y Misión para Guatemala." />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Centro de Idiomas</title>
	
	<!--Main Css-->
	<link rel="icon" type="image/x.icon" href="../src/img/logo.ico">
	<link rel="stylesheet" href="../src/css/demo.css" type="text/css" >
	<link rel="stylesheet" type="text/css" href="../src/css/bootstrapone.css">
	<link rel="stylesheet" type="text/css" href="../src/css/estilo.css">
	<link rel="stylesheet" href="../flexslider/flexslider.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="../src/css/pages.css">
	
	<!--Source-->
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Khand" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">

	<!--Main Scripts-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
	<script src="../flexslider/jquery.flexslider.js"></script>
	<script type="text/javascript" src="../src/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
			$('.flexslider').flexslider({
				animation: "slide",
				touch:true,
				pauseOnHover:false,
				pauseOnAction:false,
				start: function(slider){
					
				}
			});
		});
	</script>
</head>
<body>
	<?php include 'encabezado.php' ?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9 col-md-push-3">
				<br>
				<div class="green-title">Centro de Idiomas - CEI -</div>
				<hr>
				<div class="page-notice less-padding">
					El Centro de Idiomas es un programa de UVG Campus Sur, cuyo objetivo es la enseñanza de otros idiomas. Desde su inicio, en 1998, cientos de guatemaltecos, principalmente de la Costa Sur del país, han aprendido a hablar y escribir en el Idioma Inglés.<br><br>
					El Centro de Idiomas brinda su enseñanza con docentes altamente calificados a través de cursos corporativos y cursos regulares en diferentes niveles, expande su plan de estudios y cursos a través de asesorías a centros educativos de la región y cursos para la formación y actualización del Curriculo Nacional Base (CNB) para la incorporación de la enseñanza del idioma inglés en todas las escuelas del país.
				</div>	
			</div>

			<div class="col-md-3 col-md-pull-9">
				<?php include 'sidebar.php' ?>
			</div>

		</div>
	</div>

	<br><br><br>
	<footer>
		<p class="pull-right">© 2017 Universidad del Valle de Guatemala, Campus Sur. </p>
	</footer>
</body>
<script type="text/javascript" src="../src/js/fixed-navbar.js">
</script>
<?php include 'snow.php' ?>
</html>