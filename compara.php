
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
$diesciseis=$_POST['diesciseis'];
$diescisiete=$_POST['diescisiete'];
$diesciocho=$_POST['diesciocho'];
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

$total = $uno.$dos;
echo $total;
//aqui nombre producto
$uno2=$_POST['uno2'];
$dos2=$_POST['dos2'];
$tres2=$_POST['tres2'];
$cuatro2=$_POST['cuatro2'];
$cinco2=$_POST['cinco2'];
$seis2=$_POST['seis2'];
$siete2=$_POST['siete2'];
$ocho2=$_POST['ocho2'];
$nueve2=$_POST['nueve2'];
$dies2=$_POST['diez2'];
$once2=$_POST['once2'];
$doce2=$_POST['doce2'];
$trece2=$_POST['trece2'];
$catorce2=$_POST['catorce2'];
$quince2=$_POST['quince2'];
$diesisies2=$_POST['diesciseis2'];
$diesisiete2=$_POST['diescisiete2'];
$diesiocho2=$_POST['diesciocho2'];
$diesinueve2=$_POST['diescinueve2'];
$veinte2=$_POST['veinte2'];
$veintiuno2=$_POST['veintiuno2'];
$veintidos2=$_POST['veintidos2'];
$veintitres2=$_POST['veintitres2'];
$veinticuatro2=$_POST['veinticuatro2'];
$veinticinco2=$_POST['veinticinco2'];
$veintiseis2=$_POST['veintiseis2'];
$veintisiete2=$_POST['veintisiete2'];
$veintiocho2=$_POST['veintiocho2'];
$veintinueve2=$_POST['veintinueve2'];
$treinta2=$_POST['treinta2'];
$treintayuno2=$_POST['treintayuno2'];
$treintaydos2=$_POST['treintaydos2'];
$treintaytres2=$_POST['treintaytres2'];
$treintaycuatro2=$_POST['treintaycuatro2'];
$treintaycinco2=$_POST['treintaycinco2'];
$a2=$_POST['a2'];
$b2=$_POST['b2'];
$c2=$_POST['c2'];
$d2=$_POST['d2'];
$e2=$_POST['e2'];
$f2=$_POST['f2'];
$g2=$_POST['g2'];
$h2=$_POST['h2'];
$i2=$_POST['i2'];
$j2=$_POST['j2'];
$k2=$_POST['k2'];
$l2=$_POST['l2'];
$m2=$_POST['m2'];
$n2=$_POST['n2'];
$o2=$_POST['o2'];
$p2=$_POST['p2'];
$q2=$_POST['q2'];
$r2=$_POST['r2'];
$s2=$_POST['s2'];
$t2=$_POST['t2'];
$u2=$_POST['u2'];
$v2=$_POST['v2'];
$w2=$_POST['w2'];
$x2=$_POST['x2'];
$y2=$_POST['y2'];
//--------------------

//consulta a la tabla de productgos

$rs = mysqli_query($con, "SELECT id_producto,nombre_producto,stock FROM products");
$row=mysqli_fetch_array($rs);
while($row = mysqli_fetch_array($rs)) {
$id = $row['id_producto'];
$produ = $row['nombre_producto'];
$stock = $row['stock'];
echo $row['id_producto']; echo "  ";
echo $row['nombre_producto']; echo "  ";
echo $row['stock'];
echo "<br>";

}

//AQUI LE SIGUES NAJUMM DE LA COSTA
if ($produ == "MICRO 5PIN USB CABLE") {
	echo "si es";
}

//---------------------------------

