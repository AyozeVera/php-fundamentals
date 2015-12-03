<?php

  $images = glob('img/*.{jpg,png,jpeg}', GLOB_BRACE);
  foreach ($images as $image) {
    extract(pathinfo($image));
    echo $extension . "<br>";
  }
 ?>
