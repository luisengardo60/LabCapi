<?php session_start();
//	----------------------------------------------------------	//
// 																//
//	----------------------------------------------------------	//

$IdReg		= $_POST['IdReg'];
$Nombres  	= $_POST['Nombres'];
$Apellidos	= $_POST['Apellidos'];
$Cedula  	= $_POST['Cedula'];
$P00  		= $_POST['P00'];
$Telefono  	= $_POST['Telefono'];
$email		= $_POST['email'];

$ConBD  = mysqli_connect("localhost", "root", "", "prueba_inventario");
//	-------------------------------------------------------------------------------------	//
mysqli_query($ConBD,   "UPDATE 	`empleados`
						SET 	`Nombres`				= '$Nombres',    
								`Apellidos`				= '$Apellidos',       
								`Cedula`				= '$Cedula',    
								`P00`					= '$P00',
								`Telefono`				= '$Telefono',
								`email`					= '$email'   
						WHERE  	`Id_Empleados`			= '$IdReg'");
?>
<script language=javascript>
	self.location = "../index.php"
</script>