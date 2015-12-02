<?php

function array_pluck($toPluck, $array){
  $ret = [];
  foreach ($array as $item) {
    $ret[] = $item[$toPluck];
  }
  return $ret;
}

$people = [
  ['name' => 'Ayo','age' => 24,'ocupation' => 'Student'],
  ['name' => 'Pepe','age' => 60,'ocupation' => 'Teacher'],
  ['name' => 'Pepo','age' => 70,'ocupation' => 'Marketing'],
];

$plucked = array_pluck('name', $people);

print_r(plucked);
