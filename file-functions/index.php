<?php

  $images = glob('img/*.{jpg,png,jpeg}', GLOB_BRACE);
  foreach ($images as $image) {
    echo substr($image, -4);
    echo "\r";
  }
 ?>
