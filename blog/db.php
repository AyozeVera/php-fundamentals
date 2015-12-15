<?php namespace Blog\DB;

$config=[
  'user' => 'root',
  'password' => '1234',
  'db' => 'blog'
];

function connect($config)
{
  try {
    $conn = new \PDO('mysql:host=127.0.0.1;dbname=' . $config['db'], $config['user'], $config['password']);
    $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    return $conn;

  } catch (Exception $e) {
    return false;
  }
}

function query($query, $bindings, $conn)
{
  $stmt = $conn->prepare($query);
  $stmt->execute($bindings);
  $results = $stmt->fetch();
  return $results ? $results : false;
}

function get($tablename, $conn, $limit = 10)
{
  try {
    $result = $conn->query("SELECT * FROM $tablename LIMIT $limit");
    return ($result->rowCount() > 0) ? $result : false;
  } catch (Exception $e) {
    return false;
  }

}

function get_by_id($id, $conn)
{
  try {
    $stmt = $conn->prepare('SELECT * FROM posts WHERE id = :id');
    $stmt->execute(['id' => $id]);
    $result = $stmt->fetch();
    return $result ? $result : false;
  } catch (Exception $e) {
    return false;
  }

}
