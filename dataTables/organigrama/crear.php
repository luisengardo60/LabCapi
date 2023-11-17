<?php

include("conexion.php");
include("funciones.php");

if ($_POST["operacion"] == "Crear") {
  $imagen = '';
  if ($_FILES["imagen_usuario"]["name"] != ''){
    $imagen = subir_imagen();

  }
  $stmt = $conexion->prepare("INSERT INTO usuarios(nombre, apellido, area, imagen, telefono, email)VALUES(:nombre, :apellido, :area, :imagen, :telefono, :email)");

  $resultado = $stmt->execute(
    array(
      ':nombre'        => $_POST["nombre"],
      ':apellido'      => $_POST["apellido"],
      ':email'         => $_POST["email"],
      ':telefono'      => $_POST["telefono"],
      ':area'          => $_POST["area"],      
      ':imagen'        => $imagen
    )
    );

    if (!empty($resultado)) {
       echo 'Registro Creado';
    }

}


if ($_POST["operacion"] == "Editar") {
  $imagen = '';
  if ($_FILES["imagen_usuario"]["name"] != ''){
    $imagen = subir_imagen();

  }else{
    $imagen = $_POST["imagen_usuario_oculta"];

  }
  $stmt = $conexion->prepare("UPDATE  usuarios SET nombre=:nombre, apellido=:apellido, area=:area, telefono=:telefono, email=:email, imagen=:imagen WHERE id = :id");

  $resultado = $stmt->execute(
    array(
      ':nombre'        => $_POST["nombre"],
      ':apellido'      => $_POST["apellido"],
      ':email'         => $_POST["email"],
      ':telefono'      => $_POST["telefono"],
      ':area'          => $_POST["area"],      
      ':imagen'        => $imagen,
      ':id'            => $_POST["id_usuario"]
    )
    );

    if (!empty($resultado)) {
       echo 'Registro Actualizado';
    }

}
?>