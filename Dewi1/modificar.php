<?php

echo "php modific";

$id     = $_REQUEST["id"];
$nom    = $_REQUEST["nombre"];
$apellP = $_REQUEST["apellidoP"];
/*$apellM = $_REQUEST["apellidoM"];*/

include 'conexion.php';
$query     = "UPDATE usuarios SET nombre='$nom', password='$apellP'WHERE id=$id;";
$resultado = $mysqli->query($query);
echo '<script type="text/javascript"> window.location="principal.php"</script>';
