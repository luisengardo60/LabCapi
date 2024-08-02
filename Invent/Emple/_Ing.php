<?php session_start();

$nombre  		= $_POST['nombre'];
$apellido  		= $_POST['apellido'];
$cedula  		= $_POST['cedula'];
$p00  			= $_POST['p00'];
$email 			= $_POST['email'];

$ConBD  = mysqli_connect("localhost", "root", "", "inventario_equipos");

//-------------------------------------------------------------------------------------------//
mysqli_query($ConBD, "INSERT INTO 	`empleados`	
									(`nombre`, `apellido`, `cedula`, `p00`, `email` )
						VALUES 		('$nombre','$apellido', '$cedula', '$p00', '$email')");
?>
<script language=javascript>
	self.location = "../index.php"
</script>