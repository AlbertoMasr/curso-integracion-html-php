<?php

  $nombre = $_POST['nombre'];
  $nombre = htmlentities($nombre);
  $nombre = preg_replace('/[^a-zA-Z \s]/', '', $nombre);

  $apellido = $_POST['apellido'];
  $apellido = htmlentities($apellido);
  $apellido = preg_replace('/[^a-zA-Z \s]/', '', $apellido);

  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

  $password = $_POST['password'];
  $password = htmlentities($password);
  $password = preg_replace('/[^a-zA-Z0-9]/', '', $password);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
      
    <h1>Información del usuario</h1>
    <ul>
      <li>Nombre: <?php echo $nombre; ?></li>
      <li>Apellido: <?php echo $apellido; ?></li>
      <li>Email: <?php echo $email; ?></li>
      <li>Password: <?php echo $password; ?></li>
    </ul>
</body>
</html>
