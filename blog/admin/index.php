<?php

require '../blog.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  echo 'Form was posted';
}

view('admin/create');
