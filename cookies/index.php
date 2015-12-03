<?php
  setcookie('prefs[fontSize]', '20px');
  setcookie('prefs[favouriteCategory]', 'news');
  setcookie('prefs[screenWidth]', '1024');
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
    <?php
      if (isset($_COOKIE['prefs'])) {
        foreach ($_COOKIE['prefs'] as $key => $value) {
          echo '<li>' . $key . ':' . $value . '</li>';
        }
      }
    ?>
    </pre>
  </body>
</html>
