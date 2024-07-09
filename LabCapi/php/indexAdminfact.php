<!DOCTYPE html>
<html lang="en">
<!-- Simbolos
     &#10146; flechja a la izquierda -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C.A.P.I.</title>
    <script src="js/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="../css/estilo1.css">
    <!--<link rel="stylesheet" href="../css/cdnjscloudflareAjax.css">-->
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>

<body id="body">

    <div class="icon__menu">
        <i class="fas fa-bars" id="btn_open"></i>
        <!--<span>&Congruent;</span>-->
    </div>
    </div>

    <nav class="sidebar">
        <div class="menu__side" id="menu_side">
            <ul>
                <li><a href="inicio.php"><img src="../img/menu_inicio6.jpg" title="C.A.P.I" style="padding-left:5x;padding-right:1px;padding-top: 1px; border-radius: 50px; float:center; width: 80px; height: 80px;"></a></li>
                <li><a href="#" class="feat-btn">Adminfact<br>José Enrique Gonzalez<span class="first">&#x021D3; </span></a>
                    <ul class="feat-show">
                        <li><a href="../dataTables/organigrama/organigrama.php"> Organigrama</a></li>
                        <li><a href="../html/adminFactServidores.html"> Servidores VLAN</a></li>
                        <li><a href="../html/adminFactServidoresSGDC.html"> Servidores SGDC</a></li>
                        <li><a href="../html/adminFactintegKenan.html"> Diapositivas</a></li>
                        <li><a href="../html/adminfactChecklistCAPI.html"> CheckList aplicativos CAPI</a></li>
                        <li><a href="../html/adminFactModuloKenan.html"> Módulo Kenan User Security (KUS)</a></li>
                        <li><a href="../html/adminFactInvEquipos.html"> Inventario Usuario</a></li>
                    </ul>
                </li>
                <li><a href="#" class="serv-btn">Facturación<span class="second">&#x021D3;</span></a>
                    <ul class="serv-show">
                        <li><a href="../html/adminFactciclos.html">Ciclos de Factura</a></li>
                        <li><a href="../html/adminFactConsultar.html">Consultar Servicio</a></li>
                        <li><a href="../html/adminFactServicio.html">Refrescar Servicio</a></li>
                        <li><a href="../html/adminFactAreasAtencion.html">Áreas de Atención</a></li>
                        <li><a href="../html/adminFactIncidencias.html">Incidencias</a></li>
                        <li><a href="../html/adminFactStatus.html">Status</a></li>
                        <li><a href="../html/adminFactDocMenu.html">Control-M Job's</a></li>
                        <li><a href="../html/adminFactReplicaDaP.html">Replicate Tablas</a></li>
                    </ul>
                </li>
                <li><a href="../html/Menu_Main1.html">Mainframe</a></li>
            </ul>
    </nav>

    <!--<div class="name__page">
            <a href="../php/inicio.php" title="Inicio" style="color:transparent;">Inicio<img src="../img/menu_inicio6.jpg" style="border-radius: 50px; float:right; width: 60px; height: 60px;"></a>
        </div>
        <ul>
            <div class="options__menu">
                <nav class="sidebar>
            <li><a href=" #">
                    <div class=" option">
                        <i title="Organigrama"></i>
                        <b>Adminfact</b>
                    </div> </a></li>
                    <ul class="feat-show">
                        <li><a href="../dataTables/organigrama.php">
                                <div class="option">
                                    <i title="Servidores" style="font-size:30px">&#10146;</i>
                                    <h4><b>Organigrama</b></h4>
                                </div>
                            </a></li>

                        <li><a href="../html/adminFactServidores.html">
                                <div class="option">
                                    <i title="Cursos" style="font-size:30px">&#10146;</i>
                                    <h4><b>Servidores VLAN</b></h4>
                                </div>
                            </a></li>

                        <li><a href="../html/adminFactIntegKenan.html">
                                <div class="option">
                                    <i title="Cursos" style="font-size:30px">&#10146;</i>
                                    <h4><b>Diapositivas Kenan</b></h4>
                                </div>
                            </a></li>
                        <li><a href="../html/adminFactIntegracionEdi.html">
                                <div class="option">
                                    <i title="Cursos" style="font-size:30px">&#10146;</i>
                                    <h4><b>Diapositivas EDI</b></h4>
                                </div>
                            </a></li>

                        <li><a href="../html/adminFactIntegracionKenan.html">
                                <div class="option">
                                    <i title="Cursos" style="font-size:30px">&#10146;</i>
                                    <h4><b>Diapositivas Integación</b></h4>
                                </div>
                            </a></li>


                        <li><a href="../html/adminfactChecklistCAPI.html">
                                <div class="option">
                                    <i title="Blog" style="font-size:30px">&#10146;</i>
                                    <h4><b>Check List Aplicativos CAPI</b></h4>
                                </div>
                            </a></li>

                        <li><a href="../html/adminfactModuloKenan.html">
                                <div class="option">
                                    <i title="Contacto" style="font-size:30px">&#10146;</i>
                                    <h4><b>Modulo Kenan SAecurity (KUS)</b></h4>
                                </div>
                            </a></li>
                    </ul>
                    <ul class="feat-show">
                        <li><a href="#">
                                <div class="option">
                                    <i title="Nosotros"></i>
                                    <h4><b>Facturación</b></h4>
                                </div>
                            </a></li>
                        <li><a href="../html/adminFactciclos.html">
                                <div class="option">
                                    <i title="Nosotros" style="font-size:30px">&#10161;</i>
                                    <h4><b>Ciclos de Facturación</b></h4>
                                </div>
                            </a></li>
                        <li><a href="../html/adminFactConsultar.html">
                                <div class="option">
                                    <i title="Nosotros" style="font-size:30px">&#10161;</i>
                                    <h4><b>Consultar Servicios</b></h4>
                                </div>
                            </a></li>
                        <li><a href="../html/adminFactServicio.html">
                                <div class="option">
                                    <i title="Nosotros" style="font-size:30px">&#10161;</i>
                                    <h4><b>Refrescar Servicios</b></h4>
                                </div>
                            </a></li>
                        <li><a href="../html/adminFactAreasAtencion.html">
                                <div class="option">
                                    <i title="Nosotros" style="font-size:30px">&#10161;</i>
                                    <h4><b>Áreas de atención</b></h4>
                                </div>
                            </a></li>
                        <li><a href="../html/adminFactIncidencias.html">
                                <div class="option">
                                    <i title="Nosotros" style="font-size:30px">&#10161;</i>
                                    <h4><b>Incidencias</b></h4>
                                </div>
                            </a></li>
                        <li><a href="../html/adminFactStatus.html">
                                <div class="option">
                                    <i title="Nosotros" style="font-size:30px">&#10161;</i>
                                    <h4><b>Status</b></h4>
                                </div>
                            </a></l>
                        <li><a href="../html/adminFactDocMenu.html">
                                <div class="option">
                                    <i title="Nosotros" style="font-size:30px">&#10161;</i>
                                    <h4><b>Control-M</b></h4>
                                </div>
                            </a></li>
                        <li><a href="../html/adminFactReplicaDaP.html">
                                <div class="option">
                                    <i title="Nosotros" style="font-size:30px">&#10161;</i>
                                    <h4><b>Replicar Tablas</b></h4>
                                </div>
                            </a>
                        <li>
                            <a href="../html/Menu_Main1.html">
                                <div class="option">
                                    <i title="Mainframe"><img src="../img/images.dinosauro.jpg" style="border-radius: 50px; float:right; width: 25px; height: 25px;"></i>
                                    <h4><b>Mainframe</b></h4>
                                </div>
                            </a>-->
    </div>

    </div>
    <main>
        <?php include '../titulo/titulo1.html' ?>

        <h1 class="sombra3" style="color:aqua"><b>ADMINFACT</b></h1>


        <?php include '../reloj/reloj1.html' ?>

    </main>


    <script src="../js/script.js"></script>
</body>

</html>