<?php
  require 'functions.php';
  use Blog\DB;

  $conn = DB\connect($config);
  if (!$conn) {
    die('Connection error.');
  }

  $posts = DB\get('posts', $conn);

  $view_path = 'views/index.tmpl.php';

  include 'views/layout.php';
