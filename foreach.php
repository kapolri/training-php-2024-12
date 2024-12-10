<?php
$names = [
  'Reza',     // 0
  'Saidil',   // 1
  'Fransisco' // 2
];
foreach($names as $key => $name) {
  if ($key > 1) {
    continue;
  }
  echo "$name\n";
}