<?php
require 'functions.php';
use Blog\DB;

$conn = DB\connect($config);
if (!$conn) {
  die('Connection error.');
}

$post = DB\query('SELECT * FROM posts WHERE id = :id',
                ['id' => $_GET['id']],
                $conn);

if (!$post) {
  header('location:/blog');
}

$view_path = 'views/single.tmpl.php';

include 'views/layout.php';
