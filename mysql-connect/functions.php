<?php

require 'config.php';

try {
  $conn = new PDO('mysql:host=127.0.0.1;dbname=practice', $config['DB_USERNAME'], $config['DB_PASSWORD']);
} catch (PDOExpection $e) {
  echo 'Error: ' . $e->getMessage();
}
