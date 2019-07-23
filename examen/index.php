<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BLOG</title>
    <link rel="stylesheet" href="new_post.css">
  </head>
  <body>

    <div class = 'menu-container'>
      <div class = 'menu'>
        <div class = 'name_blog'>Jonathan CR Blog</div>
        <div class = 'busqueda'><form class="" action="seach.php" method="post">
                                <input type="text" name="busqueda" placeholder="Buscar">
        </form> </div>
        <div> <input class = 'botton' type="button" value="Nueva publicacion" onClick="window.location = 'new_post.php';">  </div>
      </div>
    </div>

    <div class="mostrar_dad">
      <h3>Mostrando Publicaciones Recientes</h3>



    <div class="publicacion">
      <?php
      include("abrir_conexion.php");

        // $sql = "SELECT * FROM posts ORDER BY date1 DESC";
        // $result = $conexion->query($sql);

        // if ($result->num_rows > 0) {
        //   // output data of each row
        //
        //   while($row = $result->fetch_assoc()) {
        //
        //       echo "<div class = 'Titulo'>" . $row["title"]. "<br><br>"
        //       . $row["date1"]. " </div>" ."<div  class = 'Contenido'>". $row["content"]. "</div> <br>
        //       <a href='update.php'><input class = 'botton' type='button' value='Modificar publicacion'></a>
        //        <br><br><hr><br>";
        //        $id =$row["id"];
        //        echo "$id";
        //
        //        // echo "<div>" . $row["id"]. "</div>";
        //       // echo "<div>" . $row["content"]. "</div>";
        //
        //   }
        // } else {
        //   echo "0 results";
        // }
        // $conexion->close();
        $connection = new mysqli("localhost", "root", "", "blog");
        // $encontrar = $_POST['busqueda'];

    foreach($connection->query("SELECT * FROM posts ORDER BY date1 DESC") as $row){

      echo "<div class = 'Titulo'>" . $row["title"]. "<br><br>"
      . $row["date1"]. " </div>" ."<div  class = 'Contenido'>". $row["content"]. "</div> <br>
      <a href='update.php'><input class = 'botton' type='button' value='Modificar publicacion'></a>
      <a href='delete.php'><input class = 'botton' type='button' value='Eliminar publicacion'></a>
       <br><br><hr><br>";

      }
       ?>
    </div>
    </div>

  </body>
</html>
