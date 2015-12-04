<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- Needs to be locked down -->
    <h1>Folks on your Mailing List</h1>
    <?php
      if ($registered_users) {
        foreach ($registered_users as $user) {
          list($name, $email) = $user;
          echo "<li>$name: <a href='mailto:$email'>$email</a></li>";
        }
      }else {
        echo "<li>Not registered users</li>";
      }
     ?>
  </body>
</html>
