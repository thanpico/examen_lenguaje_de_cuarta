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
        <div class = 'name_blog'><a href="index.php">Jonathan CR Blog</a></div>
        <div class = 'busqueda'><form class="" action="seach.php" method="post">
                                <input type="text" name="busqueda" placeholder="Buscar">
        </form> </div>
        <div> <input class = 'botton' type="button" value="Nueva publicacion" onClick="window.location = 'new_post.php';">  </div>
      </div>
    </div>

<div class="publicacion">
    <?php
    include("abrir_conexion.php");

    $connection = new mysqli("localhost", "root", "", "blog");
    $encontrar = $_POST['busqueda'];

foreach($connection->query("SELECT * FROM posts WHERE title  LIKE '%$encontrar%'") as $row){

  echo "<div class = 'Titulo'>" . $row["title"]. "<br><br>"
  . $row["date1"]. " </div>" ."<div  class = 'Contenido'>". $row["content"]. "</div> <br>
  <a href='update.php'><input class = 'botton' type='button' value='Modificar publicacion'></a>
   <br><br><hr><br>";

  }

  foreach($connection->query("SELECT * FROM posts WHERE content  LIKE '%$encontrar%'") as $row){

    echo "<div class = 'Titulo'>" . $row["title"]. "<br><br>"
    . $row["date1"]. " </div>" ."<div  class = 'Contenido'>". $row["content"]. "</div> <br>
    <a href='update.php'><input class = 'botton' type='button' value='Modificar publicacion'></a>
     <br><br><hr><br>";

    }

  ?>
</div>


  </body>
  </html>
