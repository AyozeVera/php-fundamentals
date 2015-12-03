<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Super Globals</h1>
    <?php
      $name = $_GET['name'];
      echo isset($name)? htmlspecialchars($name) : 'No name'
    ?>
  </body>
</html>
