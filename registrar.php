<?php
include("cn.php");

$cedula = $_POST["cedula"];
$nombre = $_POST["nombre"];
$marca = $_POST["marca"];
$linea = $_POST["linea"];
$modelo = $_POST["modelo"];
$valor = $_POST["valor"];

$insertar = "INSERT INTO dvehiculo(cedula,nombre,marca,linea,modelo,valor) VALUES ('$cedula','$nombre','$marca','$linea','$modelo','$valor')";

$resultado = mysqli_query($conexion,$insertar);
if(!$resultado){
    echo 'Error al registrarse';
}
else{
    ?>
    <html>
    <body>
    <form action="pro.php" method="post">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <input type="checkbox" name="descuento[]" value="1"><label>Pronto pago</label><br/> 
    <input type="checkbox" name="descuento2[]" value="2"><label>Traslado de cuenta</label><br/>
    <input type="checkbox" name="descuento3[]" value="3"><label>Servicio publico</label><br/>
    <p><input type="submit" value="continuar" /></p>
    <input type="hidden" name="Cedula" value="<?php echo $cedula ?>"/>
    <input type="hidden" name="Nombre" value="<?php echo $nombre ?>"/>
    <input type="hidden" name="Marca" value="<?php echo $marca ?>"/>
    <input type="hidden" name="Linea" value="<?php echo $linea ?>"/>
    <input type="hidden" name="Modelo" value="<?php echo $modelo ?>"/>
    <input type="hidden" name="Valor" value="<?php echo $valor ?>"/>
    
    </form>
    </body>
    </html>
<?php
}
mysqli_close($conexion);
?>
