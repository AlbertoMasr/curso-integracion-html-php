<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="server-inputs.php" method="POST" enctype="multipart/form-data">
    <!-- SIMPLE -->
    <label for="Hobbie">Hobbie:</label>
    <input type="text" name="hobbie" id="hobbie">

    <!-- ARREGLO -->
    <label for="nombres">Nombres:</label>
    <input type="text" name="nombres[]" id="nombres">
    <input type="text" name="nombres[]" id="nombres">
    <input type="text" name="nombres[]" id="nombres">

    <!-- ARREGLO ASOCIATIVO -->
    <label for="persona[nombre]">Nombre:</label>
    <input type="text" name="persona[nombre]" id="persona[nombre]">
    <label for="persona[apellido]">Apellido</label>
    <input type="text" name="persona[apellido]" id="persona[apellido]">
    <label for="persona[edad]">Edad</label>
    <input type="text" name="persona[edad]" id="persona[edad]">

    <!-- CHECKBOX -->
    <label for="feliz"> Feliz:</label>
    <input type="checkbox" name="feliz" value="Feliz">
    <label for="triste"> Triste:</label>
    <input type="checkbox" name="triste" value="Triste">
    <label for="enojado"> Enojado:</label>
    <input type="checkbox" name="enojado" value="Enojado">

    <!-- RADIO -->
    <label for="sexo">Sexo</label>
    <input type="radio" name="sexo" value="Hombre">
    <input type="radio" name="sexo" value="Mujer">

    <input type="submit" value="Enviar">

  </form>
</body>
</html>
