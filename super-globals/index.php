<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Super Globals</h1>
    <p>
      Here is the <?php echo htmlspecialchars('<code>') ?> tag.
    </p>
    <?php
      $job = $_GET['job'];
      echo isset($job) ?  $job :  "No job";
    ?>
    <h2>Sub section</h2>
  </body>
</html>
