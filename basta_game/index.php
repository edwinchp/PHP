<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Basta</h1>

    <form action="resultado.php" method="post">
    <select name="letras" required>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
    </select>
    <br><br>
    <input name="_nombre" type="text" placeholder="Nombre" required>
    <input name="_apellido" type="text" placeholder="Apellido" required>
    <input name="_animal" type="text" placeholder="Animal" required>
    <input name="_cosa" type="text" placeholder="Cosa" required>
    <br><br>

    <input type="submit" value="Enviar">
    </form>




</body>
</html>