<?php

  $images = glob('img/*.{jpg,png,jpeg}', GLOB_BRACE);
  foreach ($images as $image) {
    print_r(pathinfo($image));
    echo "\r";
  }
 ?>
