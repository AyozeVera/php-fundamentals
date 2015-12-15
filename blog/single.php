<?php
require 'blog.php';
use Blog\DB;

$post = DB\get_by_id($_GET['id'], $conn);

if (!$post) {
  header('location:/blog');
}

$data = ['post' => $post];
view('single', $data);
