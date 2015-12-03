<?php

function set_count($file_name = 'counter.txt'){
  if (file_exists($file_name)) {
    $array = file($file_name);
    //file return an array setting keys with lines
  }else {
    $handle = fopen($file_name, 'w+');
    fwrite($handle, 1);
    fclose($handle);
  }
}

set_count();
require 'index.tmpl.php';
