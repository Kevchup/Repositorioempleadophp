<?php
include("cn.php");
$rango1 = $_POST['R1'];
$rango2 = $_POST['R2'];
$rango3 = $_POST['R3'];
$por1 = $_POST['P1'];
$por2 = $_POST['P2'];
$por3 = $_POST['P3'];
$por4 = $_POST['P4'];

$actualizar = "UPDATE rangos SET rango1='$rango1',rango2='$rango2',rango3='$rango3',por1='$por1',por2='$por2',por3='$por3',por4='$por4' WHERE ite = 1";

$resultado = mysqli_query($conexion,$actualizar);
if(!$resultado){
    echo 'Error al registrarse';
}
else{
    ?>
    <html>
    <body>   
    <form action="menu.html" method="post">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <p><input type="submit" value="continuar" /></p>
    </form>
    </body>
    </html>
    <?php
}
mysqli_close($conexion);

?>

