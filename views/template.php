<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<title>FrontEnd</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="views/images/icono.jpg">

	<link rel="stylesheet" href="views/css/bootstrap.min.css">
	<link rel="stylesheet" href="views/css/font-awesome.min.css">
	<link rel="stylesheet" href="views/css/style.css">
	<link rel="stylesheet" href="views/css/fonts.css">
	<link rel="stylesheet" href="views/css/cssFancybox/jquery.fancybox.css">

	<script src="views/js/jquery-3.6.0.min.js"></script>
	<script src="views/js/bootstrap.min.js"></script>
	<script src="views/js/jquery.fancybox.js"></script>
	<script src="views/js/animatescroll.js"></script>
	<script src="views/js/jquery.scrollUp.js"></script>

</head>

<body>

	<div class="container-fluid">

		<!-- CABECERA -->

		<?php

		include "modules/cabecera.php";

		?>

		<!-- SLIDE -->

		<?php

		include "modules/slide.php";

		?>

		<!-- TOP -->

		<?php

		include "modules/top.php";

		?>

		<!-- GALERÍA -->

		<?php

		include "modules/galeria.php";

		?>

		<!-- ARTÍCULOS -->

		<?php

		include "modules/articulos.php";

		?>

		<!-- VÍDEOS -->

		<?php

		include "modules/videos.php";

		?>

		<!-- CONTACTO -->

		<?php

		include "modules/contacto.php";

		?>

		<!-- ARTÍCULO MODAL -->

		<?php

		include "modules/articulo_modal.php";

		?>

	</div>

	<script src="views/js/script.js"></script>

</body>

</html>