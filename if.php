<?php
$nilai = -100;  
echo "Nilai: $nilai => ";
if ($nilai >= 91 and $nilai <= 100) {
  echo "A";
} elseif ($nilai >= 81 and $nilai <= 90) {
  echo "B";
} elseif ($nilai >= 66 and $nilai <= 80) {
  echo "C";
} elseif ($nilai >= 0 and $nilai <= 65) {
  echo "D";
} else {
  echo "error";
}
echo PHP_EOL;