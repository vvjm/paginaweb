<?php
session_start();
//Validar que exista la variable de sesión del usuario
if(!isset($_SESSION['nombre']))
{
header('Location:error.php');
}
else
{
echo $_SESSION['nombre']."  estas a punto de cerrar sesion ";
}
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Inicial</title>
 </head>
<body>
	<a href="cerrarsesion.php"><h1><span>Cerrar Sesi&oacute;n</a>			
</body>
</html>


