<?php

function obtener_todos_registros(){
  include('conexion.php');
  $stmt = $conexion->prepare("SELECT * FROM prueba");
  $stmt->execute();
  $resultado = $stmt->fetchAll();
  return $stmt->rowCount();
}

?>