<?php

  $images = glob('img/*.{jpg,png,jpeg}', GLOB_BRACE);
  foreach ($images as $image) {
    //$info = pathinfo($image);
    //$thumb_name = $info['filename'] . '-thumb.' . $info['extension'];
    extract(pathinfo(image));
    $thumb_name = "$filename-thumb.$extension";
    echo $thumb_name . '<br>';
  }
 ?>
