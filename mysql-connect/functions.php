<?php

require 'config.php';

$id = 2;

try {

  $conn = new PDO('mysql:host=127.0.0.1;dbname=practice', $config['DB_USERNAME'], $config['DB_PASSWORD']);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $conn->prepare('SELECT * FROM users WHERE id = :id');
  $stmt->execute(['id' => $id]);

  while ($row = $stmt->fetch()) {
    print_r($row);
  }

} catch (PDOExpection $e) {
  echo 'Error: ' . $e->getMessage();
}
