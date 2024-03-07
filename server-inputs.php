<?php

  $hobbie = $_POST['hobbie'];

  var_dump($hobbie);

  $nombres = $_POST['nombres'];

  var_dump($nombres);

  $nombre = $_POST['persona']['nombre'];
  $apellido = $_POST['persona']['apellido'];
  $edad = $_POST['persona']['edad'];

  var_dump($_POST['persona']);
  var_dump($apellido);
  var_dump($edad);

  $mood = $_POST['feliz'] ?? $_POST['triste'] ?? $_POST['enojado'];
  var_dump($mood);

  $sexo = $_POST['sexo'];
  var_dump($sexo);

?>
