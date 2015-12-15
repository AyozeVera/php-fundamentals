<?php
require 'blog.php';
use Blog\DB;
$posts = DB\get('posts', $conn);

$data = ['posts' => $posts];
view('index', $data);
