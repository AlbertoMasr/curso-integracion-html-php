<?php

  $isInt = filter_var('123', FILTER_VALIDATE_INT);
  var_dump($isInt);

  $isNotInt = filter_var('123a', FILTER_VALIDATE_INT);
  var_dump($isNotInt);

  $isEmail = filter_var('holaquehacegmail.com', FILTER_VALIDATE_EMAIL);
  var_dump($isEmail);

  $isBool = filter_var('true', FILTER_VALIDATE_BOOLEAN);
  var_dump($isBool);
