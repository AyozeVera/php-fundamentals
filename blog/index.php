<?php
require 'blog.php';
use Blog\DB;
$posts = DB\get('posts', $conn);

$view_path = 'views/index.tmpl.php';

include 'views/layout.php';
