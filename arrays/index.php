<?php
  // $tuts_sites = ['nettuts+', 'psdtuts+', 'webdesigntuts+', 'wptuts+', 'othertuts'];
  $tuts_sites = [
    'nettuts+' => 'http://net.tutsplus.com',
    'psdtuts+' => 'http://psd.tutsplus.com',
    'wptuts+' => 'http://wp.tutsplus.com',
  ];
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
        foreach ($tuts_sites as $name => $url) : ?>
          <li>
            <a href="<?= $url; ?>"> <?= $name; ?></a>
          </li>
      <?php endforeach ?>
    </ul>
  </body>
</html>
