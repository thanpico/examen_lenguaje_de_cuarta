<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete</title>
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

    <div class="dad_formu">

      <form class="formu" action="delete.php" method="post">
        <h3 class = "hey">Eliminar publicacion</h3>
        <select class="select" name="select">
          <?php
          include("abrir_conexion.php");
          $resultados = mysqli_query($conexion, "SELECT title FROM posts");
          while ($consulta = mysqli_fetch_array($resultados)) {

            echo "<option value=".$consulta['title']." id=".$consulta['title'].">".$consulta['title']."</option>";
          } ?>
          <label></label>
          <input type="submit" name="enviar" >
        </select>
      </form>
    </div>
    <?php
    include("abrir_conexion.php");
    $titulo="";
    if (isset($_POST['select'])) {
      // code...
      $titulo = $_POST['select'];
      $existe = 0;
      if ($titulo=="") {
        echo "Para Eliminar debes ingresar el titulo de la publicacion";
      }else {
        $resultados = mysqli_query($conexion, "SELECT * FROM posts WHERE title = '$titulo'");
        while ($consulta = mysqli_fetch_array($resultados)) {
          echo "<div class='dad_formu'>

            <form class='formu' action='delete_formulario.php' method='post'>
              <h3 class = 'hey'>Eliminar publicacion</h3>

              <label></label>
              <input type='text' name='tittle' value=".$consulta['title']." readonly=»readonly»>

              <label></label>
              <textarea name='content' rows='9' cols='69' placeholder='Contenido del Articulo' readonly=»readonly»>".$consulta['content']."</textarea>

              <label></label>
              <input type='text' name='id' placeholder='ID de Publicacion:' value=".$consulta['id']." readonly=»readonly» >



              <input class='btn' type='submit' value='Eliminar' name='Eliminar'>
            </form>
          </div>";
          $existe++;
        }
        if ($existe==0) {
          echo "No existe la publicacion";
        }
      }

    }

     ?>

  </body>
</html>
