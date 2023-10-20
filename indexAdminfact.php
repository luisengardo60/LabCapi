<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C.A.P.I.</title>
    <script src="js/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/cdnjscloudflareAjax.css">
    <!--<link rel="stylesheet" href="css/sidebar0.css">-->
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>

<body id="body">

    <div class="icon__menu">
        <i class="fas fa-bars" id="btn_open"></i>
    </div>


    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <a href="inicio.php" title="Inicio" style="color:transparent;">Inicio<img src="img/menu_inicio6.jpg" style="border-radius: 50px; float:right; width: 60px; height: 60px;"></a>
        </div>

        <div class="options__menu">
            <a href="../dataTables/organigrama.php">
                <div class=" option">
                    <i title="Organigrama" style="font-size:30px">&#128200;</i>
                    <h4><b>Organigrama</b></h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i title="Servidores" style="font-size:30px">&#128187;</i>
                    <h4><b>Servidores</b></h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="fas fa-video" title="Cursos"></i>
                    <h4><b>Diapositivas</b></h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="far fa-sticky-note" title="Blog"></i>
                    <h4><b>Check List Aplicativos CAPI</b></h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="far fa-sticky-note" title="Contacto"></i>
                    <h4><b>Modulo Kenan SAecurity (KUS)</b></h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="far fa-sticky-note" title="Nosotros"></i>
                    <h4><b>Ciclos de Facturación</b></h4>
                </div>
            </a>
            <a href="#">
                <div class="option">
                    <i class="far fa-sticky-note" title="Nosotros"></i>
                    <h4><b>Ciclos de Facturación</b></h4>
                </div>
            </a>


        </div>

    </div>
    <main>
        <?php include 'titulo/titulo1.html' ?>

        <h1 class="sombra3" style="color:aqua"><b>ADMINFACT</b></h1><br><br><br><br><br><br><br>


        <?php include 'reloj/reloj1.html' ?>

    </main>


    <script src="js/script.js"></script>
</body>

</html>