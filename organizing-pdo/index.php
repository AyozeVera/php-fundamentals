<?php
require 'functions.php';
$conn = connect($config);
if ($conn) {
  $users = get('users', $conn);
  $id = isset($_GET['id']) ? $_GET['id'] : 1;
  $r = query("SELECT * FROM users WHERE id = :id", ['id' => $id], $conn);
} else {
  die('Could not connect to the DB.');
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PDO</title>
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
  <?php if ($r) : ?>
    <h1> <?php  echo $r['name']; ?>'s Profile</h1>
  <?php endif; ?>
</body>
</html>
