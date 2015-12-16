<?php

require '../blog.php';
use Blog\DB;
$data = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = $_POST['title'];
  $body = $_POST['body'];

  if (empty($title) || empty($body)) {
    $data['status'] = 'Please fill out both inputs.';
  } else {
    DB\query('INSERT INTO posts(title, body) VALUES (:title, :body)', ['title' => $title,'body'=> $body], $conn);
    $data['status'] = 'Post correctly created';
  }
}else {
  $status = '';
}

view('admin/create', $data);
