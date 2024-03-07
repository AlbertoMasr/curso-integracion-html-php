<?php

  // Parámetros con valores por defecto
  function suma($num1 = 1, $num2 = 1){
    return $num1 + $num2;
  }

  // Parámetros por referencia
  function incrementa(&$num){
    $num++;
    return $num;
  }

  // Parámetros variables
  function sumaVariable(...$numeros){
    $suma = 0;
    foreach($numeros as $num){
      $suma += $num;
    }
    return $suma;
  }

  // Parámetros con tipo
  function sumaTipos(int $num1, int $num2){
    return $num1 + $num2;
  }

  echo suma(2, 3); // 5
  echo "\n";
  echo incrementa($num); // 6
  echo "\n";
  echo sumaVariable(1, 2, 3, 4, 5); // 15
  echo "\n";
  echo sumaTipos(2, 3); // 5

?>
