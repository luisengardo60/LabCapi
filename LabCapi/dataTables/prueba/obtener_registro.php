<?php
include("conexion.php");
include("funciones.php");

if (isset($_POST["id_usuario"])) {
    $salida = array();
    $stmt = $conexion->prepare("SELECT * FROM prueba WHERE id = '".$_POST["id_usuario"]."' LIMIT 1");
    $stmt->execute();
    $resultado = $stmt->fetchAll();
    foreach($resultado as $fila){
        $salida["usuario"] = $fila["usuario"];
        $salida["nombre"] = $fila["nombre"];
        $salida["unidad"] = $fila["unidad"];
    }

    echo json_encode($salida);
}

?>