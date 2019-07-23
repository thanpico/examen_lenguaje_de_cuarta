<?php
    // echo var_dump($_POST);

    if (!isset($_POST['tittle']) || $_POST['tittle'] == '') {
      // code...
      // echo "Tienes que definir un nombre";
      header('Location: update.php?error=1');
      die();
    }

    if (!isset($_POST['content']) || $_POST['content'] == '') {
      // code...
      // echo "Tienes que definir un Apellido";
      header('Location: update.php?error=1');
      die();
    }



    //PROCESO DE CONEXION A LA BASE DE DATOS
                          // servidor, usuario, contrasena, tabla
    $conexion = new mysqli("localhost", "root", "", "blog");

    if ($conexion->connect_errno) {
      echo "Fallo al conectar a MySQL: (".$conexion->connect_errno.")".
      $conexion->connect_error;
    }

    $titulo = $_POST['tittle'];
    $contenido = $_POST['content'];
    $id = $_POST['id'];



    $conexion->query(
      "UPDATE posts Set title='$titulo', content ='$contenido' WHERE id='$id' "
    );
    echo $mysqli->host_info . "\n";

    header('Location: index.php?success=1');
    die();
?>
