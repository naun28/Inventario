
<?php 
session_start();

require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos

$uno=$_POST['uno'];
$sql = "UPDATE products SET stock=stock -'".$uno."' WHERE id_producto= 62;";
$query_update = mysqli_query($con,$sql);

$dos=$_POST['dos'];
$sql = "UPDATE products SET stock=stock -'".$dos."' WHERE id_producto= 24;";
$query_update = mysqli_query($con,$sql);

$tres=$_POST['tres'];
$sql = "UPDATE products SET stock=stock -'".$tres."' WHERE id_producto= 86;";
$query_update = mysqli_query($con,$sql);

$cuatro=$_POST['cuatro'];
$sql = "UPDATE products SET stock=stock -'".$cuatro."' WHERE id_producto= 18;";
$query_update = mysqli_query($con,$sql);

$cinco=$_POST['cinco'];
$sql = "UPDATE products SET stock=stock -'".$cinco."' WHERE id_producto= 27;";
$query_update = mysqli_query($con,$sql);

$seis=$_POST['seis'];
$sql = "UPDATE products SET stock=stock -'".$seis."' WHERE id_producto= 23;";
$query_update = mysqli_query($con,$sql);

$siete=$_POST['siete'];
$sql = "UPDATE products SET stock=stock -'".$siete."' WHERE id_producto= 70;";
$query_update = mysqli_query($con,$sql);

$ocho=$_POST['ocho'];
$sql = "UPDATE products SET stock=stock -'".$ocho."' WHERE id_producto= 71;";
$query_update = mysqli_query($con,$sql);

$nueve=$_POST['nueve'];
$sql = "UPDATE products SET stock=stock -'".$nueve."' WHERE id_producto= 75;";
$query_update = mysqli_query($con,$sql);

$diez=$_POST['diez'];
$sql = "UPDATE products SET stock=stock -'".$diez."' WHERE id_producto= 15;";
$query_update = mysqli_query($con,$sql);

$once=$_POST['once'];
$sql = "UPDATE products SET stock=stock -'".$once."' WHERE id_producto= 54;";
$query_update = mysqli_query($con,$sql);

$doce=$_POST['doce'];
$sql = "UPDATE products SET stock=stock -'".$doce."' WHERE id_producto= 17;";
$query_update = mysqli_query($con,$sql);

$trece=$_POST['trece'];
$sql = "UPDATE products SET stock=stock -'".$trece."' WHERE id_producto= 40;";
$query_update = mysqli_query($con,$sql);

$catorce=$_POST['catorce'];
$sql = "UPDATE products SET stock=stock -'".$catorce."' WHERE id_producto= 41;";
$query_update = mysqli_query($con,$sql);

$quince=$_POST['quince'];
$sql = "UPDATE products SET stock=stock -'".$quince."' WHERE id_producto= 42;";
$query_update = mysqli_query($con,$sql);

$diesciseis=$_POST['diesciseis'];
$sql = "UPDATE products SET stock=stock -'".$diesciseis."' WHERE id_producto= 45;";
$query_update = mysqli_query($con,$sql);

$diescisiete=$_POST['diescisiete'];
$sql = "UPDATE products SET stock=stock -'".$diescisiete."' WHERE id_producto= 19;";
$query_update = mysqli_query($con,$sql);

$diesciocho=$_POST['diesciocho'];
$sql = "UPDATE products SET stock=stock -'".$diesciocho."' WHERE id_producto= 43;";
$query_update = mysqli_query($con,$sql);

$diesinueve=$_POST['diescinueve'];
$sql = "UPDATE products SET stock=stock -'".$diescinueve."' WHERE id_producto= 57;";
$query_update = mysqli_query($con,$sql);

$veinte=$_POST['veinte'];
$sql = "UPDATE products SET stock=stock -'".$veinte."' WHERE id_producto= 58;";
$query_update = mysqli_query($con,$sql);

$veintiuno=$_POST['veintiuno'];
$sql = "UPDATE products SET stock=stock -'".$veintiuno."' WHERE id_producto= 21;";
$query_update = mysqli_query($con,$sql);

$veintidos=$_POST['veintidos'];
$sql = "UPDATE products SET stock=stock -'".$veintidos."' WHERE id_producto= 52;";
$query_update = mysqli_query($con,$sql);

$veintitres=$_POST['veintitres'];
$sql = "UPDATE products SET stock=stock -'".$veintitres."' WHERE id_producto= 25;";
$query_update = mysqli_query($con,$sql);

$veinticuatro=$_POST['veinticuatro'];
$sql = "UPDATE products SET stock=stock -'".$veinticuatro."' WHERE id_producto= 28;";
$query_update = mysqli_query($con,$sql);

$veinticinco=$_POST['veinticinco'];
$sql = "UPDATE products SET stock=stock -'".$veinticinco."' WHERE id_producto= 16;";
$query_update = mysqli_query($con,$sql);

$veintiseis=$_POST['veintiseis'];
$sql = "UPDATE products SET stock=stock -'".$veintiseis."' WHERE id_producto= 39;";
$query_update = mysqli_query($con,$sql);

$veintisiete=$_POST['veintisiete'];
$sql = "UPDATE products SET stock=stock -'".$veintisiete."' WHERE id_producto= 78;";
$query_update = mysqli_query($con,$sql);

$veintiocho=$_POST['veintiocho'];
$sql = "UPDATE products SET stock=stock -'".$veintiocho."' WHERE id_producto= 20;";
$query_update = mysqli_query($con,$sql);

$veintinueve=$_POST['veintinueve'];
$sql = "UPDATE products SET stock=stock -'".$veintinueve."' WHERE id_producto= 67;";
$query_update = mysqli_query($con,$sql);

$treinta=$_POST['treinta'];
$sql = "UPDATE products SET stock=stock -'".$treinta."' WHERE id_producto= 79;";
$query_update = mysqli_query($con,$sql);

$treintayuno=$_POST['treintayuno'];
$sql = "UPDATE products SET stock=stock -'".$treintayuno."' WHERE id_producto= 80;";
$query_update = mysqli_query($con,$sql);

$treintaydos=$_POST['treintaydos'];
$sql = "UPDATE products SET stock=stock -'".$treintaydos."' WHERE id_producto= 13;";
$query_update = mysqli_query($con,$sql);

$treintaytres=$_POST['treintaytres'];
$sql = "UPDATE products SET stock=stock -'".$treintaytres."' WHERE id_producto= 38;";
$query_update = mysqli_query($con,$sql);

$treintaycuatro=$_POST['treintaycuatro'];
$sql = "UPDATE products SET stock=stock -'".$treintaycuatro."' WHERE id_producto= 44;";
$query_update = mysqli_query($con,$sql);

$treintaycinco=$_POST['treintaycinco'];
$sql = "UPDATE products SET stock=stock -'".$treintaycinco."' WHERE id_producto= 46;";
$query_update = mysqli_query($con,$sql);

$a=$_POST['a'];
$sql = "UPDATE products SET stock=stock -'".$a."' WHERE id_producto= 47;";
$query_update = mysqli_query($con,$sql);

$b=$_POST['b'];
$sql = "UPDATE products SET stock=stock -'".$b."' WHERE id_producto= 49;";
$query_update = mysqli_query($con,$sql);

$c=$_POST['c'];
$sql = "UPDATE products SET stock=stock -'".$c."' WHERE id_producto= 50;";
$query_update = mysqli_query($con,$sql);

$d=$_POST['d'];
$sql = "UPDATE products SET stock=stock -'".$d."' WHERE id_producto= 53;";
$query_update = mysqli_query($con,$sql);

$e=$_POST['e'];
$sql = "UPDATE products SET stock=stock -'".$e."' WHERE id_producto= 56;";
$query_update = mysqli_query($con,$sql);

$f=$_POST['f'];
$sql = "UPDATE products SET stock=stock -'".$f."' WHERE id_producto= 59;";
$query_update = mysqli_query($con,$sql);

$g=$_POST['g'];
$sql = "UPDATE products SET stock=stock -'".$g."' WHERE id_producto= 60;";
$query_update = mysqli_query($con,$sql);

$h=$_POST['h'];
$sql = "UPDATE products SET stock=stock -'".$h."' WHERE id_producto= 61;";
$query_update = mysqli_query($con,$sql);

$i=$_POST['i'];
$sql = "UPDATE products SET stock=stock -'".$i."' WHERE id_producto= 63;";
$query_update = mysqli_query($con,$sql);

$j=$_POST['j'];
$sql = "UPDATE products SET stock=stock -'".$j."' WHERE id_producto= 74;";
$query_update = mysqli_query($con,$sql);

$k=$_POST['k'];
$sql = "UPDATE products SET stock=stock -'".$k."' WHERE id_producto= 65;";
$query_update = mysqli_query($con,$sql);

$l=$_POST['l'];
$sql = "UPDATE products SET stock=stock -'".$l."' WHERE id_producto= 66;";
$query_update = mysqli_query($con,$sql);

$m=$_POST['m'];
$sql = "UPDATE products SET stock=stock -'".$m."' WHERE id_producto= 68;";
$query_update = mysqli_query($con,$sql);

$n=$_POST['n'];
$sql = "UPDATE products SET stock=stock -'".$n."' WHERE id_producto= 69;";
$query_update = mysqli_query($con,$sql);

$o=$_POST['o'];
$sql = "UPDATE products SET stock=stock -'".$o."' WHERE id_producto= 72;";
$query_update = mysqli_query($con,$sql);

$p=$_POST['p'];
$sql = "UPDATE products SET stock=stock -'".$p."' WHERE id_producto= 73;";
$query_update = mysqli_query($con,$sql);

$q=$_POST['q'];
$sql = "UPDATE products SET stock=stock -'".$q."' WHERE id_producto= 74;";
$query_update = mysqli_query($con,$sql);

$r=$_POST['r'];
$sql = "UPDATE products SET stock=stock -'".$r."' WHERE id_producto= 76;";
$query_update = mysqli_query($con,$sql);

$s=$_POST['s'];
$sql = "UPDATE products SET stock=stock -'".$s."' WHERE id_producto= 77;";
$query_update = mysqli_query($con,$sql);

$t=$_POST['t'];
$sql = "UPDATE products SET stock=stock -'".$t."' WHERE id_producto= 81;";
$query_update = mysqli_query($con,$sql);

$u=$_POST['u'];
$sql = "UPDATE products SET stock=stock -'".$u."' WHERE id_producto= 82;";
$query_update = mysqli_query($con,$sql);

$v=$_POST['v'];
$sql = "UPDATE products SET stock=stock -'".$v."' WHERE id_producto= 83;";
$query_update = mysqli_query($con,$sql);

$w=$_POST['w'];
$sql = "UPDATE products SET stock=stock -'".$w."' WHERE id_producto= 22;";
$query_update = mysqli_query($con,$sql);

$x=$_POST['x'];
$sql = "UPDATE products SET stock=stock -'".$x."' WHERE id_producto= 64;";
$query_update = mysqli_query($con,$sql);

$modelo=$_POST['modelo'];
$cantidad=$_POST['cantidad'];

//--------Insercion de usuarios------------
$q = ("INSERT INTO telefonos VALUES ('','$modelo','$cantidad')");

$ejecutar_q = mysqli_query($con, $q) or die("error al insertar");
if ($ejecutar_q){  
        //OK  
    echo "window.alert('mensaje enviado')"; 
    header("location: ensamblaje.php"); 
    }  
    else{  
        //Error  
    echo"window.alert('Error')";  
    } 
//---------------------------------

