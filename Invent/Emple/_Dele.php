<?php

$IdReg	= $_GET['a'];

$ConBD  = mysqli_connect("localhost", "root", "", "inventario_equipos");

//	-------------------------------------------------------------------------------------	//
//																							//
//	-------------------------------------------------------------------------------------	//
mysqli_query($ConBD,   "DELETE FROM `empleados` WHERE `Id_Empleados` = '$IdReg'");
?>

<script language=javascript>
	self.location = "../index.php"
</script>