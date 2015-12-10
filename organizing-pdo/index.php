
<?php

require 'functions.php';

$conn = connect($config);
if ($conn) {
  $users = get('users', $conn);
  $r = query("SELECT * FROM users WHERE id = :id", ['id' => (int)$_GET['id']], $conn);
} else die('Could not connect to the DB.');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
      PDO
  </title>
</head>
<body>
  <?php
  if ($users) {
    foreach ($users as $user) {
      echo "<li>{$user['name']}</li>";
    }
  } else {
    echo 'No row returned.';
  }
  ?>
  <h1> <?php
    if ($r) {
      print_r($r);
    } else {
      echo "No rows";
    };
  ?> </h1>
</body>
</html>
