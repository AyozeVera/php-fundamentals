<?php

  $images = glob('img/*.{jpg,png,jpeg}', GLOB_BRACE);
  foreach ($images as $image) {
    $info = pathinfo($image);
    echo $info['extension'];
    echo "\r";
  }
 ?>
