<?php 
include("cn.php");
$cc =$_POST['concedula'];
$vehiculo = "SELECT * FROM dvehiculo WHERE cedula = $cc";

$resultado= mysqli_query($conexion,$vehiculo);
?>

<!DOCTYPE html>

<html lang="es">
<head>
<meta charset="UTF-8">
<title></title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" type="text/css" href="estiloco.css">
</head>
<body>

<div class="container-table">
<div class="table__title">Datos de usuario</div>
<div class="table__header">cedula</div>
<div class="table__header">nombre</div>
<div class="table__header">marca</div>
<div class="table__header">linea</div>
<div class="table__header">modelo</div>
<div class="table__header">valor</div>
<div class="table__header">valor impuesto</div>
<?php
$resultado= mysqli_query($conexion,$vehiculo);
while($row=mysqli_fetch_assoc($resultado)){   ?>
<div class="table__item"><?php echo $row["cedula"];?></div>
<div class="table__item"><?php echo $row["nombre"];?></div>
<div class="table__item"><?php echo $row["marca"];?></div>
<div class="table__item"><?php echo $row["linea"];?></div>
<div class="table__item"><?php echo $row["modelo"];?></div>
<div class="table__item"><?php echo $row["valor"];?></div>
<div class="table__item"><?php echo $row["valori"];?></div>
<?php } mysqli_free_result($resultado);?>
</div>

<form action="menu.html" method="post">
<link rel="stylesheet" type="text/css" href="estilo.css">
<p><input type="submit" value="volver" /></p>
</form>
</body>
</html>
<?php

?>

