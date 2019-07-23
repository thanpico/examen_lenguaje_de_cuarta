<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>New Post</title>
    <link rel="stylesheet" href="new_post.css">
  </head>
  <body>

        <div class = 'menu-container'>
          <div class = 'menu'>
            <div class = 'name_blog'><a href="index.php">Jonathan CR Blog</a></div>
            <div class = 'busqueda'> <input type="text" name="buscar" value="Buscar"> </div>
            <div> <input class = "botton" type="submit"  value="Nueva publicacion"> </div>
          </div>
        </div>


        <div class="dad_formu">

          <form class="formu" action="procesar_formulario.php" method="post">
            <h3 class = "hey">Agregando Nueva publicacion</h3>

            <label></label>
            <input type="text" name="tittle" placeholder="Titulo">

            <label></label>
            <textarea name="content" rows="9" cols="69" placeholder="Contenido del Articulo"></textarea>


            <?php
            if (isset($_GET['error']) && $_GET['error']==1) {
              // code...
              echo "Rellene Todos Lo Campos.";
            }
            ?>
            <?php
            if (isset($_GET['success']) && $_GET['success']==1) {
              // code...
              echo "Se guardo correctamente";
            }
            ?>

            <input class="btn" type="submit" value="Publicar">
          </form>
        </div>
  </body>
</html>
