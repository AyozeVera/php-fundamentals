<?php

  $images = glob('img/*.{jpg,png,jpeg}', GLOB_BRACE);
  foreach ($images as $image) {
    echo basename($image);
    echo "\r";
  }
 ?>
