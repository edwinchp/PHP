<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Funciones</title>
  </head>
  <body>
    <h1>Funciones</h1>

    <?php
    function cubo($myVar){
      return $myVar * $myVar * $myVar;
    }
    ?>

    <p>El cubo de 2 es <?php echo cubo(2); ?></p>
    <p>El cubo de 5 es <?php echo cubo(5); ?></p>
  </body>
</html>
