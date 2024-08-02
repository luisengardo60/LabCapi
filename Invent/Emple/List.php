<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/linux.jpeg">
    <link rel="stylesheet" href="../ccs/bootstrap.min.css">
    <!--<link rel="stylesheet" href="../css/menuLateral1.css">-->
    <link rel="stylesheet" href="../ccs/googleApis.css">
    <link rel="stylesheet" href="../ccs/cdnjscloudflareAjax.css">
    <script src="../js/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="../ccs/estilos.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <title>Servidores</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>

<body id="body" style="background:lightskyblue;">

    <h1 class="sombra4">Control de Inventario</h1>
    <h1 class="sombra4">Empleados</h1>
    <br>
    <h1 class="sombra4">LISTADO DE EMPLEADOS</h1>

    <a href="Emple\Ingr.php">
        INGRESAR
    </a>


    <table class="table table-primary table-hover">
        <thead>
            <tr>
                <th width="5%" style="background:blue; color:white; font-size:16px;">N°</th>
                <th width="20%" style="background:blue; color:white; font-size:16px;">Nombres</th>
                <th width="20%" style="background:blue; color:white; font-size:16px;">Apellidos</th>
                <th width="20%" style="background:blue; color:white; font-size:16px;">Cedula Identidad</th>
                <th width="10%" style="background:blue; color:white; font-size:16px;">P00</th>
                <th width="20%" style="background:blue; color:white; font-size:16px;">Email</th>
                <th width="15%" style="background:blue; color:white; font-size:16px;">Accion</th>
            </tr>
        </thead>
        <tbody>
            <?php

           include('Adm/Conect.php');           

            $Secuen = 0;
            //-------------------------------------------------------------------------------------------//
            $Consulta1  =  "SELECT      *
                            FROM        `empleados`
                            WHERE       `Id_Empleados`      >=   '1'
                            ORDER BY    `Id_Empleados`       ASC;  
                                        -- `apellido`     ASC";
            $Resultado1 = mysqli_query($ConBD, $Consulta1) or die("Error conectando a la Base de Datos 1");
            while ($Campos1  = mysqli_fetch_row($Resultado1)) {
                $Secuen++;
                $Id_Empleados                   = $Campos1[0];
                $nombre                         = $Campos1[1];
                $apellido                       = $Campos1[2];
                $cedula                         = $Campos1[3];
                $p00                            = $Campos1[4];
                $email                          = $Campos1[5];
            ?>
                <tr>
                    <td font-size=18px><?php echo $Secuen; ?></td>
                    <td><?php echo $nombre; ?></td>
                    <td><?php echo $apellido; ?></td>
                    <td><?php echo $cedula; ?></td>
                    <td><?php echo $p00; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><a href="_Dele.php?a=<?php echo $Id_Empleados; ?>"> <i class="material-icons" style="color:red">delete</i></a>

                    <a href="Actu.php?a=<?php echo $Id_Empleados; ?>"> <i class="material-icons" style="color:blue">update</i></a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>