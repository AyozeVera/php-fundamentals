<?php

function set_count($file_name = 'counter.txt'){
  if (file_exists($file_name)) {
    $count = (int)file_get_contents($file_name);
    $count++;
    file_put_contents($file_name, $count);

  }else {
    $handle = fopen($file_name, 'w+');
    $count = 1;
    fwrite($handle, $count);
    fclose($handle);
  }
  return $count;
}

$count = set_count();
require 'index.tmpl.php';
