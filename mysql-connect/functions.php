<?php

require 'config.php';

$letter = 'A%';

try {

  $conn = new PDO('mysql:host=127.0.0.1;dbname=practice', $config['DB_USERNAME'], $config['DB_PASSWORD']);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $conn->prepare('INSERT INTO users(name) VALUES(:username)');
  $stmt->bindParam(':username', $username, PDO::PARAM_STR);

  $username = "Pepa";
  $stmt->execute();

  $username = "María";
  $stmt->execute();

  $username = "Ancor";
  $stmt->execute();

  $result = $stmt->fetchAll();

} catch (PDOExpection $e) {
  echo 'Error: ' . $e->getMessage();
}
