<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Trabajando con formularios</title>
  </head>
  <body>

    <form method="POST">
      <input type="text" name="elNombre" placeholder="Ingresa tu nombre" required>
      <button type="submit" name="button">Mostrar</button>
    </form>

    <?php
    @$varNombre = $_POST['elNombre'];

      if (!isset($_POST['elNombre'])) {
        echo "";

      }else {
        echo "Tu nombre es: <strong>$varNombre</strong>";
      }
     ?>


  </body>
</html>
