
<?php 
session_start();

require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos

$uno=$_POST['uno'];
$dos=$_POST['dos'];
$tres=$_POST['tres'];
$cuatro=$_POST['cuatro'];
$cinco=$_POST['cinco'];
$seis=$_POST['seis'];
$siete=$_POST['siete'];
$ocho=$_POST['ocho'];
$nueve=$_POST['nueve'];
$diez=$_POST['diez'];
$once=$_POST['once'];
$doce=$_POST['doce'];
$trece=$_POST['trece'];
$catorce=$_POST['catorce'];
$quince=$_POST['quince'];
$diesisies=$_POST['diesciseis'];
$diesisiete=$_POST['diescisiete'];
$diesiocho=$_POST['diesciocho'];
$diesinueve=$_POST['diescinueve'];
$veinte=$_POST['veinte'];
$veintiuno=$_POST['veintiuno'];
$veintidos=$_POST['veintidos'];
$veintitres=$_POST['veintitres'];
$veinticuatro=$_POST['veinticuatro'];
$veinticinco=$_POST['veinticinco'];
$veintiseis=$_POST['veintiseis'];
$veintisiete=$_POST['veintisiete'];
$veintiocho=$_POST['veintiocho'];
$veintinueve=$_POST['veintinueve'];
$treinta=$_POST['treinta'];
$treintayuno=$_POST['treintayuno'];
$treintaydos=$_POST['treintaydos'];
$treintaytres=$_POST['treintaytres'];
$treintaycuatro=$_POST['treintaycuatro'];
$treintaycinco=$_POST['treintaycinco'];
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$e=$_POST['e'];
$f=$_POST['f'];
$g=$_POST['g'];
$h=$_POST['h'];
$i=$_POST['i'];
$j=$_POST['j'];
$k=$_POST['k'];
$l=$_POST['l'];
$m=$_POST['m'];
$n=$_POST['n'];
$o=$_POST['o'];
$p=$_POST['p'];
$q=$_POST['q'];
$r=$_POST['r'];
$s=$_POST['s'];
$t=$_POST['t'];
$u=$_POST['u'];
$v=$_POST['v'];
$w=$_POST['w'];
$x=$_POST['x'];
$y=$_POST['y'];



$rs = mysqli_query($con, "SELECT * FROM products");
$row=mysqli_fetch_array($rs);

$

$q= "INSERT INTO vehiculos (id,num_vehiculo,vehiculo,placas,rendimiento) values ('','$numvehiculo','$nomvehiculo',
'$placavehiculo','$rendimiento')";
$ejecuta_q= mysqli_query($conecviatik,$q) or die("error al insertar");
echo "se inserto bien";
mysqli_close($con);
header('Location: ensamblaje.php');

?>