<?php

require 'config.php';

try {
  $conn = new PDO('mysql:host=127.0.0.1;dbname=practice', $config['DB_USERNAME'], $config['DB_PASSWORD']);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $id = 2;
  $stmnt = $conn->prepare('SELECT FROM users WHERE id = :id')
  $stmnt->execute(['id' =>$id]);
  foreach ($results as $row) {
    print_r($row);
  }
} catch (PDOExpection $e) {
  echo 'Error: ' . $e->getMessage();
}
