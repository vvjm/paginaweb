<?php
   session_start();
 try{
     $conn = new PDO('mysql:host=localhost:3306;dbname=autos','root','');
     echo 'Conexion realizada';
    }            
catch (PDOException $ex) {
       echo $ex->getMessage();
       exit;
    }
 
/* @var $_POST type */
$nombre= $_POST["usuarios"];
$pass= $_POST["password"];

 
 $query=("SELECT nombre,password FROM `usuarios` "
         . "WHERE `nombre`='".mysql_real_escape_string($nombre)."' and "
         . "`password`='".mysql_real_escape_string($pass)."'"); 

$rs= mysql_query($query); 
$row=mysql_fetch_object($rs); 
$nr = mysql_num_rows($rs);


if($nr == 1){ 
   
	header("Location:hola.html");
} 

else if($nr == 0) {    
     
     header("Location:index.html"); 
}   

?>