<?php

  $images = glob('img/*.{jpg,png,jpeg}', GLOB_BRACE);
  foreach ($images as $image) {
    pathinfo($image, PATHINFO_EXTENSION);
    echo '<br>';
  }
 ?>
