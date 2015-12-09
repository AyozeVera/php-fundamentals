<?php

require 'config.php';

$letter = 'A%';

try {

  $conn = new PDO('mysql:host=127.0.0.1;dbname=practice', $config['DB_USERNAME'], $config['DB_PASSWORD']);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $conn->prepare('SELECT * FROM users WHERE name LIKE :letter');
  $stmt->bindParam(':letter', $letter, PDO::PARAM_INT);
  $stmt->execute();

  while ($row = $stmt->fetch()) {
    print_r($row);
  }

} catch (PDOExpection $e) {
  echo 'Error: ' . $e->getMessage();
}
