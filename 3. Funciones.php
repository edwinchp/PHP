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
    <hr>

    <h1>Ejemplo 1</h1>

    <?php
    function salario($salarioMin = 100){
      echo "El salario es de $salarioMin";
    }
    salario();  //Outputs El salario es de 100
    ?>
    <p><?php salario(300); ?></p> <!--Outputs El salario es de 300-->
    <p><?php salario(5000); ?></p> <!--Outputs El salario es de 5000-->
  </body>
</html>
