<?php
  $tuts_sites = array('nettuts+', 'psdtuts+', 'webdesigntuts+', 'wptuts+');
  print_r($tuts_sites);
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
