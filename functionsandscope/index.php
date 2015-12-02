<?php
$arr = [
  'name' => 'Ayo',
  'age' => 24,
  'ocupation' => 'Student',
];

function pp($value){
  echo '<pre>'
  print_r($value);
  echo '</pre>'
}


pp($arr);
