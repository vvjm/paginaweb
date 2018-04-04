<!DOCTYPE html>
<html>
	<head>
		<title>Reporte Bootstrap</title>
		<link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">

	</head>
	<body align="center">
	<div>&nbsp;</div>
	<div class="container">

	    <table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
	    <thead>
		<tr class="h3">
		    <th class="text-center">Id</th>
		    <th>Usuario</th>
		    <th>Password</th>  
		    <th class="text-center"><button type="button" class="btn btn-default glyphicon glyphicon-plus btn-success" id='n$id'></button></th>
		</tr>
	    </thead>

	    <tbody>
		    <?php
include 'conexion.php';
$query     = "SELECT * FROM usuarios";
$resultado = $mysqli->query($query);
if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $id      = $row["id"];
        $nombre  = $row["nombre"];
        $paterno = $row["password"];
        /*$materno = $row["materno"];*/
        echo "<tr><td class='text-center'>$id</td>";
        echo "<td>$nombre</td>";
        echo "<td>$paterno</td>";
      /*  echo "<td>$materno</td>";*/
        echo "<td class='text-center'><button type='button' class='btn btn-default glyphicon glyphicon-pencil btn-warning' id='m$id'></button>";
        echo "<input value='$id' type='hidden' id='tm$id'>";
        echo "<input value='$id' type='hidden' id='te$id'>";
        echo "<button type='button' class='btn btn-default glyphicon glyphicon-minus btn-danger' id='e$id'></button></td></tr>";
    }
} else {}
?>
	    </tbody>
	</table>
	</div>
	</body>
	<script  type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
	<script  type="text/javascript" src="js/conecta.js"></script>
</html>
