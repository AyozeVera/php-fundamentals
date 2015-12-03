<?php

function set_count($file_name = 'counter.txt'){
  if (file_exists($file_name)) {
    $handle = fopen($file_name, 'r');
    $count = (int)fread($handle, 20);
    $count++;
    $handle = fopen($file_name, 'w');
    fwrite($handle, $count);
  }else {
    $handle = fopen($file_name, 'w+');
    fwrite($handle, 1);
    fclose($handle);
  }
}

set_count();
require 'index.tmpl.php';
