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
				echo "Ejercicio 02";
				?>
				</h1>
                <h4>
				<?php
				echo "Escribir un programa en el cual se tome por URL cuatro números, calcular y mostrar la suma de los dos primeros y el producto del tercero y el cuarto.";
				?>
				</h4>
				<?php
				$num1 = $_GET["num1"];
				$num2 = $_GET["num2"];
                $num3 = $_GET["num3"];
                $num4 = $_GET["num4"];
                
				echo "<h4> La suma de los 2 primeros números ".$num1+$num2.", y el producto del tercero y cuarto : ".$num3*$num4."<h4>";
				?>
                <br>
				<a href="?num1=5&num2=8&num3=2&num4=7">Click para mostrar el resultado</a>
			</div>
	</div>

	<div id="pie">
		Todos lo derechos reservados
	</div>
</body>
</html>