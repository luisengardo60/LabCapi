<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/linux.jpeg">
    <link rel="stylesheet" href="../Omarin/ccs/bootstrap.min.css">
    <!--<link rel="stylesheet" href="../css/menuLateral1.css">-->
    <link rel="stylesheet" href="../Omarin/ccs/googleApis.css">
    <link rel="stylesheet" href="../Omarin/ccs/cdnjscloudflareAjax.css">
    <script src="../Omarin/js/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="../Omarin/ccs/estilos.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <title>Servidores</title>
</head>

<body id="body" style="background:lightskyblue;">

    <h1 class="sombra4">Control de Inventario</h1>
    <h1 class="sombra4">Empleados</h1>
    <br>
    <h1 class="sombra4">ACTUALIZAR EMPLEADOS</h1>

    <hr>
    <?php
    $IdReg    = $_GET['a'];

    $ConBD  = mysqli_connect("localhost", "root", "", "inventario_equipos");
    $Consulta1  =  "SELECT      *
                    FROM        `empleados`
                    WHERE       `Id_Empleados`      =   '$IdReg'";
    $Resultado1 = mysqli_query($ConBD, $Consulta1) or die("Error1 conectando a la Base de Datos 1");
    while ($Campos1  = mysqli_fetch_row($Resultado1)) {
        $Id_Empleados                   = $Campos1[0];
        $nombre                         = $Campos1[1];
        $Apellido                       = $Campos1[2];
        $cedula                         = $Campos1[3];
        $p00                            = $Campos1[4];
        $email                          = $Campos1[5];
    }
    ?>

    <form action="_Act.php" id="formulario" name="formulario" method="post" autocomplete="off" onSubmit="">
        <input type="hidden" id="IdReg" name="IdReg" value="<?php echo $Id_Empleados; ?>">
        <div>
            <spam> Nombre : </spam><input type="text" id="nombre" name="nombre" value="<?php echo $Nombres; ?>">
        </div>
        <div>
            <spam> Apellidos : </spam><input type="text" id="apellido" name="apellido" value="<?php echo $Apellidos; ?>">
        </div>
        <div>
            <spam> Cedula Identidad : </spam><input type="text" id="Cedula" name="Cedula" value="<?php echo $Cedula_Identidad; ?>">
        </div>
        <div>
            <spam> P00 : </spam><input type="text" id="p00" name="p00" value="<?php echo $P00; ?>">
        </div>
        <div>
            <spam> email : </spam><input type="text" id="email" name="email" value="<?php echo $email; ?>">
        </div>
        <br>
        <button type="submit" class="btn btn-success btn-sm" id="btn_ing">ACTUALIZAR</button>
    </form>
</body>

</html>