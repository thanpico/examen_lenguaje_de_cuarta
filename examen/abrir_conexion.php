<?php
$conexion = new mysqli("localhost", "root", "", "blog");

if ($conexion->connect_errno) {
  // code...
  echo "Fallo al conectar a MySQL: (".$conexion->connect_errno.")".
  $conexion->connect_error;
}

 ?>
