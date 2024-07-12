<!DOCTYPE html>
<html lang="en">
<!-- Simbolos &#10146; flecha a la izquierda -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C.A.P.I.</title>
    <script src="../js/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="../css/estilo3.css">
    <link rel="stylesheet" href="../css/cdnjscloudflareAjax.css">
    <script src="../js/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>

<body id="body" style="background:url('../img/cantvLogo12.jpg') no-repeat center center fixed; background-size:cover;">

<header class="header">
		<div class="container">
			<nav class="menu">
				<a href="../php/indexAdminPortales.php">Portales</a>
				<a href="#">Nosotros</a>
				<a href="#">Blog</a>
				<a href="#">Contacto</a>
			</nav>
		</div>
	</header>
    <div class="icon__menu">
        <i class="fas fa-bars" id="btn_open"><a class="sombra3" style="color:cyan">&nbsp;C.A.P.I.</a></i>
        <!--<span>&Congruent;</span>-->
    </div>
    </div>
    <nav class="sidebar">
        <div class="menu__side" id="menu_side">
            <ul>
                <li><a href="../index.php"><img src="../img/menu_inicio6.jpg" title="Entrar" style="padding-left:5x;padding-right:1px;padding-top: 1px; border-radius: 50px; float:center; width: 80px; height: 80px;"></a>
                </li>
                <li><a href="#" class="feat-btn">Admin<span class="first">&#x021D3;
                        </span></a>
                    <ul class="feat-show">
                        <li><a href="../php/indexAdminfact.php">AdminFact</a></li>
                        <li><a href="../php/indexAdminBasis.php">AdminBasis</a></li>
                        <li><a href="../php/indexAdminCrm.php">AdminCrm</a></li>
                        <li><a href="../php/indexAdminEdi.php">AdminEdi</a></li>
                    </ul>
                </li>
                <li><a href="#" class="serv-btn">Aplicaciones<span class="second">&#x021D3;</span></a>
                    <ul class="serv-show">
                        <li><a href="../php/indexAprovision.php">Aprovisionamiento</a></li>
                        <li><a href="../php/indexEmpresarial.php">Empresarial</a></li>
                        <li><a href="../php/indexProyectos.php">Proyectos</a></li>
                        <li><a href="../php/indexRecaudacion.php">Facturación</a></li>
                        <li><a href="../php/indexTecnologia.php">Tecnologia</a></li>
                    </ul>
                </li>

            </ul>
    </nav>


    <main>
       <br><br><br><br><br><br><br><br><br><br>
        

        <?php include '../reloj/reloj1.html' ?>

    </main>


    <script src="../js/script.js"></script>
</body>

</html>
   
   