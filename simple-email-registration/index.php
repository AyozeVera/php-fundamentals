<?php
require 'functions.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);

  if (empty($name) || empty($email)) {
    $status = 'Please provide a name and email';
  }else {
    add_register_user($name, $email);
  }
}

include 'index.tmpl.php';
