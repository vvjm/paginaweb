<?php
$user=$_get['user'];
$password=$_get['password'];
if(($user=="edith") and ($password =="1234")){
	echo"BIENVENIDO A TU PAGINA".$user;

}
else{
	echo"Usuario o contraseña incorrectos";
	echo'<br><a href ="'.$_SERVER['HTTP_REFERER'].'">VOLVER</a>';
}
		?>
		