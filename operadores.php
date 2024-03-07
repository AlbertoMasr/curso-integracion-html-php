<?php

  # Spaceship
  $a = 5;
  $b = 5;
  $c = 10;
  $d = 3;

  var_dump($a <=> $b); // 0
  var_dump($a <=> $c); // -1
  var_dump($c <=> $a); // 1

  # Null Coalescing
  $a = null;
  $b = 5;
  $c = 10;

  var_dump($a ?? $b); // 5
  var_dump($a ?? $c); // 10
  var_dump($b ?? $c); // 5
