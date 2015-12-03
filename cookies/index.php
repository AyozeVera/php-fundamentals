<?php
setcookie('fontSize', '50px');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <style media="screen">
      body{
        font-size: <?= $_COOKIE['fontSize']; ?>;
      }
    </style>
    <title></title>
  </head>
  <body>
    <p>
      Hi there, how are your?
    </p>
    <pre>
    </pre>
  </body>
</html>
