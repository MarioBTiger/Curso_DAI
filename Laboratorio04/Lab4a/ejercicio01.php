<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Prueba HTML5</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
</head>
<body>
	<div class="container">
		<div id="cabecera">
			<h1>Laboratorio 04</h1>
		</div>
			<div class="col-sm">
				<h1>
				<?php
				echo "Ejercicio 01 : ";
				?>
				</h1>
				<h4>
				<?php
				echo "Escribir un programa que permita cargar el nombre de un usuario y su mail por URL. Mostrar posteriormente los datos en la página HTML.";
				?>
				</h4>
				<?php
				$user = $_GET["usuario"];
				$email = $_GET["email"];
				echo "<h4> Hola ".$user.", registrado con el correo: ".$email."<h4>";
				?>
				<a href="?usuario=Mario&email=mario.santisteban@tecsup.edu.pe">Click para mostrar los datos</a>
			</div>
	</div>

	<div id="pie">
		Todos lo derechos reservados
	</div>
</body>
</html>