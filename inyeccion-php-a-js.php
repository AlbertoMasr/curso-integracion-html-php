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

  <script>
    var familia = <?php echo json_encode($familia); ?>;
    console.log(familia);
  </script>

</body>
</html>
