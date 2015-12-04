<?php
require 'functions.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);

  if (empty($name) || empty($email) || !validate_email()) {
    $status = 'Please provide a name and email';
  }else {
    add_register_user($name, $email);
    $status = 'You have been added.'
  }
}

include 'index.tmpl.php';
