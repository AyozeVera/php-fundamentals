<?php
  session_start();
  if (!isset($_SESSION['username'])){
    header('Location: login.php');
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Hello, <?php echo $_SESSION['username'] ?></h1>
    <a href="logout.php">Logout</a>
  </body>
</html>
