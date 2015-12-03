<?php

  // $images = glob('img/*.{jpg,png,jpeg}', GLOB_BRACE);
  // foreach ($images as $image) {
  //   //$info = pathinfo($image);
  //   //$thumb_name = $info['filename'] . '-thumb.' . $info['extension'];
  //   extract(pathinfo($image));
  //   $thumb_name = "$filename.thumb.$extension";
  //   echo $thumb_name . '<br>';
  // }

  // HOMEWORKS:
  // Upon completion of this lesson, I have some homework for you. Given the file
  // path, images/my-file.txt, show me three different ways to specifically capture
  // the string, my-file, and store it in a variable, $filename.
  $globtxt = glob('images/my-file.txt');
  $globtxt = $globtxt[0];
  $pi = pathinfo($globtxt);
  $try1 = $pi['filename'];
  extract($pi);
  $try2 = $filename;
  $try3 = substr(basename($globtxt), 0 , strlen(basename($globtxt))-4 );
  echo $try1 . '<br>';
  echo $try2 . '<br>';
  echo $try3 . '<br>';
 ?>
