<?php
  $name = $_FILES['imagen']['name'];
  $tmpPath = $_FILES['imagen']['tmp_name'];
  $newPath = 'uploads/' . $name;

  move_uploaded_file($tmpPath, $newPath);
