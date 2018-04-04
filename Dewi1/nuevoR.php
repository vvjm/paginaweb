<?php

$nm = $_REQUEST['nombre'];
$aP = $_REQUEST['apellidoP'];
/*$aM = $_REQUEST['apellidoM'];*/

/*echo "$nom";
echo "<br>$apellP";
echo "<br>$apellM";*/

include 'conexion.php';
$query     = "insert into usuarios(nombre, password) values ('$nm', '$aP');";
$resultado = $mysqli->query($query);
echo '<script type="text/javascript"> window.location="principal.php"</script>';
