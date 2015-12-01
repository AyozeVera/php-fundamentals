<?php
  $tuts_sites = ['nettuts+', 'psdtuts+', 'webdesigntuts+', 'wptuts+', 'othertuts+'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Arrays</title>
  </head>
  <body>
    <h1>Tuts+ Sites</h1>
    <ul>
      <?php
        foreach ($tuts_sites as $site) {
          echo  "<li>$site</li>";
        }
      ?>
    </ul>
  </body>
</html>
