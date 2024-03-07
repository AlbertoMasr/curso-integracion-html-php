<?php 

  $familia = array('Bebu', 'Chihua', 'Coco');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Familia SOTEVAS</h1>

  <?php if(is_array($familia)): ?>
    <ul>
      <?php foreach($familia as $miembro): ?>
        <li><?php echo $miembro ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

</body>
</html>
