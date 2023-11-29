<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>C.A.P.I.</title>
  <!--<link rel="stylesheet" href="../css/bootstrap.min.css">-->
  <link rel="stylesheet" href="css/prueba2.css">
  <link rel="stylesheet" href="css/cdnjscloudflareAjax.css">
  <script src="js/jquery-3.4.1.js"></script>
</head>

<body>
  <header>
   <?php include 'titulo/titulo.html' ?>
</header>
<main>

 <div class="container__card">

    <div class="card__father">
        <div class="card">
            <div class="card__front" style="background-image: url(img/newcantv.jpg);">
                <div class="bg"></div>
                
                <div class="body__card_front">
                   <!-- <h1>C.A.P.I</h1>-->
                </div>
            </div>
            <div class="card__back">
            
                <div class="body__card_back">
                    <!--<h1>Entrar</h1>-->
                    <p style="color:white";>Bienvenidos</p>
                    <a href="php/inicio.php"><button class="boton"><b>Entrar</b></button></a>
                    <!--<input><a href="php/inicio.php"><button class="boton"><b>Entrar</b></button></a> value="Leer Más">-->
                    <br><br>
                    <!--<h4>C.A.P.I.</h4>-->
                </div>
               
            </div>
        </div>
    </div>

</div>
  </main>

  <article>
    <?php include 'reloj/reloj.html' ?>
  </article>
</body>

</html>