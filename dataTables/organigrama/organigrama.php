<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="../../js/jquery-3.4.1.js"></script>
  <link rel="stylesheet" href="../../css/estilos.css">
  <link rel="stylesheet" href="../../css/cdnjscloudflareAjax.css">
  <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
  <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">-->
  <title>Organigrama</title>

</head>

<body id="body" style="background:lightskyblue;">

  <div class="icon__menu">
    <i class="fas fa-bars" id="btn_open"></i>
  </div>


  <div class="menu__side" id="menu_side">

    <div class="name__page">
      <a href="../../php/inicio.php" title="Inicio" style="color:transparent;">Inicio<img src="../../img/menu_inicio6.jpg" style="border-radius: 50px; float:right; width: 60px; height: 60px;"></a>
    </div>
    <ul>
      <div class="options__menu">
        <nav class="sidebar>
            <li><a href=" #">
          <div class=" option">
            <i title="Adminfact"></i>
            <b>Adminfact</b>
          </div></a></li>
          <ul class="feat-show">

            <li><a href="../../php/indexAdminfact.php">
                <div class="option">
                  <i title="Menu Adminfact" style="font-size:18px">&#10146;</i>
                  <h6><b>Menu Adminfact</b></h6>
                </div>
              </a></li>
          </ul>

          <!--

            <li><a href="../html/adminFactSuperDome.html">
                <div class="option">
                    <i title="Cursos" style="font-size:18px">&#10146;</i>
                    <h6><b>Particiones SuperDome</b></h6>
                </div>
            </a></li>

            <li><a href="../html/adminFactPassword.html">
                <div class="option">
                    <i title="Cursos" style="font-size:18px">&#10146;</i>
                    <h6><b>Contraseñas Unix</b></h6>
                </div>
            </a></li>

            <li><a href="../html/adminfactBdOracle.html">
                <div class="option">
                    <i title="Cursos" style="font-size:18px">&#10146;</i>
                    <h6><b>Base de Datos Oracle</b></h6>
                </div>
            </a></li>

            <li><a href="../html/adminFactPuertosReq.html">
                <div class="option">
                    <i title="Cursos" style="font-size:18px">&#10146;</i>
                    <h6><b>Puertos Requeridos</b></h6>
                </div>
            </a></li>

            <li><a href="../html/kenan18_ServidoresQA.html">
                <div class="option">
                    <i title="Cursos" style="font-size:18px">&#10146;</i>
                    <h6><b>Servidores QA </b></h6>
                </div>
            </a></li>

            <li><a href="../html/adminFactIntegKenan.html">
                <div class="option">
                    <i title="Cursos" style="font-size:18px">&#10146;</i>
                    <h6><b>Diapositivas Kenan</b></h6>
                </div>
            </a></li>
            <li><a href="../html/adminFactIntegracionEdi.html">
                <div class="option">
                    <i title="Cursos" style="font-size:18px">&#10146;</i>
                    <h6><b>Diapositivas EDI</b></h6>
                </div>
            </a></li>

            <li><a href="../html/adminFactIntegracionKenan.html">
                <div class="option">
                    <i title="Cursos" style="font-size:18px">&#10146;</i>
                    <h6><b>Diapositivas Integación</b></h6>
                </div>
            </a></li>


            <li><a href="../html/adminfactChecklistCAPI.html">
                <div class="option">
                    <i title="Blog" style="font-size:18px">&#10146;</i>
                    <h6><b>Check List Aplicativos CAPI</b></h6>
                </div>
            </a></li>

            <li><a href="../html/adminfactModuloKenan.html">
                <div class="option">
                    <i title="Contacto" style="font-size:18px">&#10146;</i>
                    <h6><b>Modulo Kenan SAecurity (KUS)</b></h6>
                </div>
            </a></li></ul>
            <ul class="feat-show">
            <li><a href="#">
                <div class="option">
                    <i title="Nosotros"></i>
                    <h6><b>Facturación</b></h6>
                </div>
            </a></li>
            <li><a href="../html/adminFactciclos.html">
                <div class="option">
                    <i title="Nosotros" style="font-size:18px">&#10161;</i>
                    <h6><b>Ciclos de Facturación</b></h6>
                </div>
            </a></li>
            <li><a href="../html/adminFactConsultar.html">
                <div class="option">
                    <i title="Nosotros" style="font-size:18px">&#10161;</i>
                    <h6><b>Consultar Servicios</b></h6>
                </div>
            </a></li>
            <li><a href="../html/adminFactServicio.html">
                <div class="option">
                    <i title="Nosotros" style="font-size:18px">&#10161;</i>
                    <h6><b>Refrescar Servicios</b></h6>
                </div>
            </a></li>
            <li><a href="../html/adminFactAreasAtencion.html">
                <div class="option">
                    <i title="Nosotros" style="font-size:18px">&#10161;</i>
                    <h6><b>Áreas de atención</b></h6>
                </div>
            </a></li>
            <li><a href="../html/adminFactIncidencias.html">
                <div class="option">
                    <i title="Nosotros" style="font-size:18px">&#10161;</i>
                    <h6><b>Incidencias</b></h6>
                </div>
            </a></li>
            <li><a href="../html/adminFactStatus.html">
                <div class="option">
                    <i title="Nosotros" style="font-size:18px">&#10161;</i>
                    <h6><b>Status</b></h6>
                </div>
            </a></l>
            <li><a href="../html/adminFactDocMenu.html">
                <div class="option">
                    <i title="Nosotros" style="font-size:18px">&#10161;</i>
                    <h6><b>Control-M</b></h6>
                </div>
            </a></li>
            <li><a href="../html/adminFactReplicaDaP.html">
                <div class="option">
                    <i title="Nosotros" style="font-size:18px">&#10161;</i>
                    <h6><b>Replicar Tablas</b></h6>
                </div>
            </a><li>
            <a href="../html/Menu_Main1.html">
                <div class="option">
                    <i title="Mainframe"><img src="../img/images.dinosauro.jpg" style="border-radius: 50px; float:right; width: 25px; height: 25px;"></i>
                    <h6><b>Mainframe</b></h6>
                </div>
            </a>-->
      </div>

  </div>
  <main>

    <div class="container fondo">

      <div class="row">
        <div class="col-2 offset-10">
          <div class="text-center">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modalUsuario" id="botonCrear">
              <i class="bi bi-plus-circle-fill"> Crear</i>
            </button>
          </div>
        </div>
      </div>
      <br><br>

      <div class="table-responsive" style="background-color:white">
        <table id="datos_usuario" class="table table-cebra table-hover">
          <thead>
            <tr>
              <!-- <th style="background-color: blue; color:white">Id</th>-->
              <th style="background-color: blue; color:white; text-align:center">Nombre</th>
              <th style="background-color: blue; color:white; text-align:center">Apellido</th>
              <th style="background-color: blue; color:white; text-align:center">Email</th>
              <th style="background-color: blue; color:white; text-align:center">Teléfono</th>
              <!--<th>Cargo</th>-->
              <!--<th>Gerencia</th>-->
              <th style="background-color: blue; color:white; text-align:center">Área</th>
              <th style="background-color: blue; color:white">Imagen</th>
              <!--<th>Fecha de Creación</th>-->
              <th style="background-color: blue; color:white;">Editar</th>
              <th style="background-color: blue; color:white">Borrar</th>
            </tr>
          </thead>
        </table>
      </div><br><br>

      <div class="table-responsive" style="background-color:white">
        <table id="datos_usuario" class="table table-cebra table-hover">
          <thead>
            <tr>
              <th style="background-color: blue; color:white">Área</th>
              <th style="background-color: blue; color:white">Aplicaciones</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>ADMINFACT</td>
              <td>KENAN - DOC1 - GENERATE - DATAFLOW - KDM</td>
            </tr>
            <tr>
              <td>ADMINBASIS</td>
              <td>SAP/RMCA - SAP/CM - SAP/R3 - SAP/J2EE </td>
            </tr>
            <tr>
              <td>ADMINCRM</td>
              <td>CRM - CERTUS - DALMA</td>
            </tr>
            <tr>
              <td>ADMINCDI</td>
              <td>DI CONTROL CANTV</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="table-responsive">
        <!-- <b>Menu Adminfact</b><a href="../html/indexAdminfact.php">&#10132;</a>-->

      </div>

      <!-- Modal -->
      <div class=" modal fade" id="modalUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header azul">
              <h5 class="modal-title" id="exampleModalLabel">Crear usuario</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>



            <form method="POST" id="formulario" enctype="multipart/form-data">
              <div class="modal-content">
                <div class="modal-body">
                  <label for="nombre">Ingrese el nombre</label>
                  <input type="text" name="nombre" id="nombre" class="form-control"><br>

                  <label for="apellido">Ingrese los apellidos</label>
                  <input type="text" name="apellido" id="apellido" class="form-control"><br>

                  <label for="email">Ingrese el correo</label>
                  <input type="email" name="email" id="email" class="form-control"><br>

                  <label for="telefono">Ingrese el número de teléfono o celular</label>
                  <input type="text" name="telefono" id="telefono" class="form-control"><br>

                  <label for="area">Ingrese el Área</label>
                  <input type="text" name="area" id="area" class="form-control"><br>

                  <!--<label for="cargo">Ingrese el cargo</label>
                <input type="text" name="cargo" id="cargo" class="form-control"><br>-->

                  <!--<label for="gerencia">Ingrese la Gerencia</label>
                <input type="text" name="gerencia" id="gerencia" class="form-control"><br>-->


                  <label for="imagen">Seleccione una imagen</label>
                  <input type="file" name="imagen_usuario" id="imagen_usuario" class="form-control">
                  <span id="imagen_subida"></span><br>

                </div>

                <div class="modal-footer">
                  <input type="hidden" name="id_usuario" id="id_usuario">
                  <input type="hidden" name="operacion" id="operacion">
                  <input type="submit" name="action" id="action" class="btn btn-success" value="Crear">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>




      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

      <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>

      <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>-->

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

      <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <script type="text/javascript">
        $(document).ready(function() {
          $("#botonCrear").click(function() {
            $("#formulario")[0].reset();
            $(".modal-title").text("Crear Usuario");
            $("#action").val("Crear");
            $("#operacion").val("Crear");
            $("#imagen_subida").html("");
          });

          var dataTable = $('#datos_usuario').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
              url: "obtener_registros.php",
              type: "POST"
            },
            "columnsDefs": [{
              "targets": [0, 3, 4],
              "orderable": false,
            }, ]
          });

        });

        //Aqui codigo para insertar

        $(document).on('submit', '#formulario', function(event) {
          event.preventDefault();
          var nombre = $("#nombre").val();
          var apellido = $("#apellido").val();
          var email = $("#email").val();
          var telefono = $("#telefono").val();
          var area = $("#area").val();
          var extension = $("#imagen_usuario").val().split('.').pop().toLowerCase();

          if (extension != '') {
            if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
              alert("Formato de imagen inválido");
              ("#imagen_usuario").val('');
              return false;
            }
          }

          if (nombre != '' && apellido != '' && email != '') {
            $.ajax({
              url: "crear.php",
              method: "POST",
              data: new FormData(this),
              contentType: false,
              processData: false,
              success: function(data) {
                alert(data);
                $('#formulario')[0].reset();
                $('#modalUsuario').modal('hide');
                dataTable.ajax.reload();
              }
            });
          } else {
            alert("Algunos campos son obligatorios");
          }
        });

        //Funcion de editar
        $(document).on('click', '.editar', function() {
          var id_usuario = $(this).attr("id");
          $.ajax({
            url: "obtener_registro.php",
            method: "POST",
            data: {
              id_usuario: id_usuario
            },
            dataType: "json",
            success: function(data) {
              //Console.log(data):
              $('#modalUsuario').modal('show');
              $('#nombre').val(data.nombre);
              $('#apellido').val(data.apellido);
              $('#email').val(data.email);
              $('#telefono').val(data.telefono);
              $('#area').val(data.area);
              $('.modal-title').text("Editar Usuario");
              $('#id_usuario').val(id_usuario);
              $('#imagen_subida').html(data.imagen_usuario);
              $('#action').val("Editar");
              $('#operacion').val("Editar");

            },
            error: function(jqXHR, textStatus, errorTrhown) {
              console.log(textStatus, errorTrhown);
            }

          })
        });

        //Funcion borrar
        $(document).on('click', '.borrar', function() {
          var id_usuario = $(this).attr("id");
          if (confirm("Esta seguro de borrar este registro" + id_usuario)) {
            $.ajax({
              url: "borrar.php",
              method: "POST",
              data: {
                id_usuario: id_usuario
              },
              success: function(data) {
                alert(data);
                dataTable.ajax.reload();
              }
            });
          } else {
            return false;
          }

        });
      </script>


  </main>

  <script src="../../js/script.js"></script>
</body>

</html>