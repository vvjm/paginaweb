<?php
 $usuario2= $_REQUEST['usuario'];
 $password2= $_REQUEST['password'];

$userd = base64_decode($usuario2);
$pwd = base64_decode($password2);

include 'conexion.php';
 $query= "SELECT * FROM usuarios where nombre='$userd' and password='$pwd'"; 

 $resultado= $mysqli->query($query);

 if ($resultado->num_rows > 0){
 		header("Location:Nregistro.html");
 		//echo "correcto";
 	 }

 	 else {
 	 		header("Location:error1.php");
 	 	//echo "incorrecto";	
 	 }
 	 
 	 ?>