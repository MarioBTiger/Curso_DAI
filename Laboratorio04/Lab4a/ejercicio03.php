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
				echo "Ejercicio 03";
				?>
				</h1>
                <h4>
				<?php
				echo "Realizar un programa que lea por GET dos números, si el primero es mayor al segundo informar su suma y diferencia, en caso contrario informar el producto y la división del primero respecto al segundo.";
				?>
				</h4>
				<?php
				$num1 = $_GET["num1"];
				$num2 = $_GET["num2"];
                
                if ($num1 > $num2) {
                    echo "<h4> La suma de ambos es: ".$num1+$num2.", y su diferencia es: ".$num1-$num2."<h4>";
                  } else  {
                    echo "<h4> El producto de ambos es: ".$num1*$num2.", y la división de los números es: ".$num1/$num2."<h4>";
                  }
				?>
				<a href="?num1=1&num2=8">Click para mostrar el resultado</a>
			</div>
	</div>

	<div id="pie">
		Todos lo derechos reservados
	</div>
</body>
</html>