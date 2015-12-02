<?php

function array_pluck($toPluck, $array){
  return array_map(function($item) use($toPluck){
    return $item[$toPluck];
  }, $array);
}

$people = [
  ['name' => 'Ayo','age' => 24,'ocupation' => 'Student'],
  ['name' => 'Pepe','age' => 60,'ocupation' => 'Teacher'],
  ['name' => 'Pepo','age' => 70,'ocupation' => 'Marketing'],
];

$names = array_pluck('name', $people);
foreach ($names as $name ) {
  echo $name;
}
