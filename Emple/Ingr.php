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
</head>

<body id="body" style="background:lightskyblue;">

    <h1 class="sombra4">Control de Inventario</h1>
    <h1 class="sombra4">Empleados</h1>
    <br>
    <h1 class="sombra4">INGRESAR EMPLEADOS</h1>

    <hr>

    <form action="_Ing.php" id="formulario" name="formulario" method="post" autocomplete="off" onSubmit="">
        <div>
            <spam> Nombres : </spam><input type="text" id="Nombres" name="Nombres">
        </div>
        <div>
            <spam> Apellidos : </spam><input type="text" id="Apellidos" name="Apellidos">
        </div>
        <div>
            <spam> Cedula Identidad : </spam><input type="number" id="Cedula" name="Cedula">
        </div>
        <div>
            <spam> P00 : </spam><input type="text" id="P00" name="P00">
        </div>
        <div>
            <spam> Telefono : </spam><input type="text" id="Telefono" name="Telefono">
        </div>
        <div>
            <spam> email : </spam><input type="text" id="email" name="email">
        </div>

        <button type="submit" class="btn btn-success btn-sm" id="btn_ing">INGRESAR</button>

    </form>
</body>

</html>