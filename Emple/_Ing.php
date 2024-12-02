<?php session_start();

$Nombres 		= $_POST['Nombres'];
$Apellidos 		= $_POST['Apellidos'];
$Cedula  		= $_POST['Cedula'];
$P00  			= $_POST['P00'];
$Telefono		= $_POST['Telefono'];
$email 			= $_POST['email'];

$ConBD  = mysqli_connect("localhost", "root", "", "prueba_inventario");

//-------------------------------------------------------------------------------------------//
mysqli_query($ConBD, "INSERT INTO 	`empleados`	
									(`Nombres`, `Apellidos`, `Cedula`, `P00`, `Telefono`, `email` )
						VALUES 		('$Nombres','$Apellidos', '$Cedula', '$P00', '$Telefono', '$email')");
?>
<script language=javascript>
	self.location = "../index.php"
</script>