<?php session_start();
//	----------------------------------------------------------	//
// 																//
//	----------------------------------------------------------	//

$IdReg		= $_POST['IdReg'];
$nombre  	= $_POST['nombre'];
$apellido  	= $_POST['apellido'];
$cedula  	= $_POST['cedula'];
$p00  		= $_POST['p00'];
$email		= $_POST['email'];

$ConBD  = mysqli_connect("localhost", "root", "", "inventario_equipos");
//	-------------------------------------------------------------------------------------	//
mysqli_query($ConBD,   "UPDATE 	`empleados`
						SET 	`nombre`				= '$nombre',    
								`apellido`				= '$apellido',       
								`cedula`				= '$cedula',    
								`p00`					= '$p00',
								`email`					= '$email'   
						WHERE  	`Id_Empleados`			= '$IdReg'");
?>
<script language=javascript>
	self.location = "../index.php"
</script>