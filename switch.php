<?php
$gender = 'p';
switch ($gender) {
  case 'L':
  case 'l':
    echo 'Laki-laki' . PHP_EOL;
    break;

  case 'P': case 'p':
    echo 'Perempuan' . PHP_EOL;
    break;

  default:
    echo 'Undefined gender' . PHP_EOL;
    break;
}
