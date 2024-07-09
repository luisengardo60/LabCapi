<?php

include("conexion.php");
include("funciones.php");

if (isset($_POST["id_usuario"])) 
{
  $stmt = $conexion->prepare("DELETE FROM prueba WHERE id = :id");

  $resultado = $stmt->execute(
    array(
       ':id' => $_POST["id_usuario"]
    )
    );

    if (!empty($resultado)) {
       echo 'Registro borrado';
    }

}