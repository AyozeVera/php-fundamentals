<?php

$config=[
  'user' => 'root',
  'password' => '1234'
];

function connect($config)
{
  try {
    $conn = new PDO('mysql:host=127.0.0.1;dbname=practice', $config['user'], $config['password']);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;

  } catch (Exception $e) {
    return false;
  }
}

function query($query, $bindings, $conn)
{
  $stmt = $conn->prepare($query);
  $stmt->execute($bindings);
  $results = $stmt->fetchAll();
  return $results ? $results : false; 
}

function get($tablename, $conn)
{
  try {
    $result = $conn->query("SELECT * FROM $tablename");
    return ($result->rowCount() > 0) ? $result : false;
  } catch (Exception $e) {
    return false;
  }

}
