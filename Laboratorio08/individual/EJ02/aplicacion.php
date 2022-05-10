<?PHP include ("seguridad.php");?>
<html>
<head>
        <title>Aplicación segura</title>
</head>
<body>
<h1>Bienvenido <?PHP echo $_SESSION["user"];?></h1>
<br>
------
<br>
Usuario: <?PHP echo $_SESSION["user"];?>
<br>
------
<br><br>
<a href="otra.php">Continuar</a>
</body>
</html>
 
