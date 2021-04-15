<link rel="stylesheet" type="text/css" href="estiloco.css">
<?php
include("cn.php");
error_reporting(0);

$i = 1;
$consultar = "SELECT * FROM rangos WHERE ite = $i ";


$resultad= mysqli_query($conexion,$consultar);
while($row=mysqli_fetch_assoc($resultad)){
$ra1=$row["rango1"];
$ra2=$row["rango2"];
$ra3=$row["rango3"];
$po1=$row["por1"];
$po2=$row["por2"];
$po3=$row["por3"];
$po4=$row["por4"];
} mysqli_free_result($resultad);  
$cedula =$_POST['Cedula'];
$marca = $_POST['Marca'];
$linea = $_POST['Linea'];
$modelo = $_POST['Modelo'];
$valor = $_POST['Valor'];

$impt;
$imp;
$des=0;
$des1;
$des2;
$des3;

if ($_POST ["Valor"]>"0" and $_POST ["Valor"]<=$ra1){
    $impt=$po1 * $_POST ["Valor"]/100;
    ;} 

 if ($_POST ["Valor"]>$ra1 and $_POST ["Valor"]<=$ra2){ 
    $impt=$po2 * $_POST ["Valor"]/100;
    ;}

     if ($_POST ["Valor"]>$ra2 and $_POST ["Valor"]<=$ra3){
        $impt=$po3 * $_POST ["Valor"]/100;
        ;} 

         if ($_POST ["Valor"]>$ra3) {
            $impt=$po4 * $_POST ["Valor"]/100;
            ;} 



            if('descuento' !="0" ){
            foreach($_POST['descuento'] as $s1){ } 
            if ($s1!=""){
                $des1=$impt*10/100; 
                $des=$des+$des1;   
                } 
            }
            if('descuento2' !="0"){
            foreach($_POST['descuento2'] as $s2){  } 
            
           if ($s2!=""){
            $des2=50000;
        $des=$des+$des2;  
        }
        } 
            if('descuento3' !="0"){
            foreach($_POST['descuento3'] as $s3){ } 
            if ($s3!=""){
                $des3=$impt*5/100;
                $des=$des+$des3; 
                
                } 
        } 

            $imp=$impt-$des;      
?>

<html lang="es">
<head>
<meta charset="UTF-8">
<title></title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" type="text/css" href="estiloco.css">
</head>
<body>
<div class="container-table2">
<div class="table__title2">DATOS</div>
<div class="table__header2">TIPO</div>
<div class="table__header2">RESULTADO</div>

<div class="table__item2">Cedula</div>
<div class="table__item2"><?php echo $cedula?></div>
<div class="table__item2">Marca</div>
<div class="table__item2"><?php echo $marca?></div>
<div class="table__item2">Linea</div>
<div class="table__item2"><?php echo $linea?></div>
<div class="table__item2">Modelo</div>
<div class="table__item2"><?php echo $modelo?></div>
<div class="table__item2">Valor</div>
<div class="table__item2"><?php echo $valor?></div>
<div class="table__item2">Valor impuesto</div>
<div class="table__item2"><?php echo $impt?></div>
<div class="table__item2">Total a pagar</div>
<div class="table__item2"><?php echo $imp?></div>
</div>
<form action="menu.html" method="post">
<link rel="stylesheet" type="text/css" href="estilo.css">
<p><input type="submit" value="volver" /></p>
</form>
</body> 
</html>
