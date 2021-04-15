<?php 
error_reporting(0);
include("cn.php");
?>

<html>
<head>
<title>Cambiar Rangos</title>
<meta charset="utf8">
</head>
<body>
 
<!--AUTOS-->
<form action="menu.html" method="post">
<p><input type="submit" value="volver" /></p>
</form>

<form action="registrarr.php" method="post">
<link rel="stylesheet" type="text/css" href="estilo.css">
<p>Limite del rango 1:<input type="text" name="R1" pattern="[0-9]{1,12}" title="El rango 1 debe ser solo números y tener una longitud máxima de 12 caracteres " required></p>
<p>Limite del rango 2:<input type="text" name="R2" pattern="[0-9]{1,12}" title="El rango 2 debe ser solo números y tener una longitud máxima de 12 caracteres " required></p>
<p>Limite del rango 3:<input type="text" name="R3" pattern="[0-9]{1,12}" title="El rango 3 debe ser solo números y tener una longitud máxima de 12 caracteres " required></p>
<p>Porcentaje del rango 1:<input type="text" name="P1" pattern="[0-9-,.]{1,3}" title="El porcentaje del rango 1 debe ser solo números y tener una longitud máxima de 3 caracteres " required></p>
<p>Porcentaje del rango 2:<input type="text" name="P2" pattern="[0-9-,.]{1,3}" title="El porcentaje del rango 2 debe ser solo números y tener una longitud máxima de 3 caracteres " required></p>
<p>Porcentaje del rango 3:<input type="text" name="P3" pattern="[0-9-,.]{1,3}" title="El porcentaje del rango 3 debe ser solo números y tener una longitud máxima de 3 caracteres " required></p>
<p>Porcentaje del rango 4:<input type="text" name="P4" pattern="[0-9-,.]{1,3}" title="El porcentaje del rango 4 debe ser solo números y tener una longitud máxima de 3 caracteres " required></p>
<p><input type="submit" value="Confirmar" /></p>
</form>

</body>
</html>
