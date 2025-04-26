<?php 
    include 'calcular_edad.php';
  
  
	function obtenerNombreApellido ($nombre, $apellido, $anoNacimiento) {
    return Array(
      'nombre'=> $nombre,
      'apellido'=> $apellido,
      'edad' => calcular_edad($anoNacimiento)
      );
  }
  $datos = obtenerNombreApellido("David", "Lopez", 2003);
?>