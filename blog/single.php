<?php
require 'blog.php';
use Blog\DB;

$post = DB\get_by_id($_GET['id'], $conn);

if (!$post) {
  header('location:/blog');
}

$view_path = 'views/single.tmpl.php';

include 'views/layout.php';
