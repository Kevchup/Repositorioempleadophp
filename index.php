<?php
include("cn.php");
error_reporting(0);
$cedula= $_POST['cedula'];
$nombre= $_POST['nombre'];
$marca= $_POST['marca'];
$linea= $_POST['linea'];
$modelo= $_POST['modelo'];
$valor= $_POST['valor'];

$vehiculo = "SELECT * FROM dvehiculo";
?>

<html>
<head>
<title>Calculo impuestos</title>
<meta charset="utf8">
</head>
<body>
 
<!--FORMULARIO-->
<form action="menu.html" method="post">
<p><input type="submit" value="volver" /></p>
</form>


<form action="registrar.php" method="post">
<link rel="stylesheet" type="text/css" href="estilo.css">
<p>Cedula:<input type="text" name="cedula" pattern="[0-9]{6,10}" title="La cedula debe ser solo números y tener una longitud máxima de 10 caracteres" required></p>
<p>Nombre:<input type="text" name="nombre" pattern="[a-zA-Z- ]{1,50}" title="En el nombre solo debe poner letras y tener una longitud máxima de 50 caracteres" required></p>
<p>Marca:<input type="text" name="marca" pattern="[a-zA-Z]{1,30}" title="La marca debe ser solo letras y tener una longitud máxima de 30 caracteres" required></p>
<p>Linea:<input type="text" name="linea" pattern="[a-zA-Z- ][a-zA-Z0-9-_\.]{1,30}" title="" required></p>
<p>Modelo:<input type="text" name="modelo" pattern="[0-9]{1,30}" title="La marca debe ser solo números y tener una longitud máxima de 30 caracteres " required></p>
<p>Valor:<input type="text" name="valor" pattern="[0-9]{1,30}" title="El valor debe ser solo números y tener una longitud máxima de 30 caracteres " required></p>
<p><input type="submit" name="submit" /></p>
</form>

</body>
</html>

