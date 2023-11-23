<?php

include("conexion.php");
include("funciones.php");

if ($_POST["operacion"] == "Crear") {
  
  $stmt = $conexion->prepare("INSERT INTO prueba(usuario, nombre, unidad)VALUES(:usuario, :nombre, :unidad)");

  $resultado = $stmt->execute(
    array(
      ':usuario'        => $_POST["usuario"],
      ':nombre'         => $_POST["nombre"],
      ':unidad'         => $_POST["unidad"]
    )
    );

    if (!empty($resultado)) {
       echo 'Registro Creado';
    }

}


if ($_POST["operacion"] == "Editar") {
    $stmt = $conexion->prepare("UPDATE prueba SET usuario=:usuario, nombre=:nombre, unidad=:unidad WHERE id = :id");

  $resultado = $stmt->execute(
    array(
      ':usuario'    => $_POST["usuario"],
      ':nombre'     => $_POST["nombre"],
      ':unidad'     => $_POST["unidad"],
      ':id'         => $_POST["id_usuario"]
    )
    );

    if (!empty($resultado)) {
       echo 'Registro Actualizado';
    }

}
?>