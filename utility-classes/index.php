<?php
require 'classes/html.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>
      <?php echo HTML::anchor('http://google.es', 'Google'); ?>
    </p>
    <p>
      <?php echo HTML::items(['a','b','c']); ?>
    </p>
  </body>
</html>
