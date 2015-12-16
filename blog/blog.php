<?php

require 'functions.php';
require 'db.php';
use Blog\DB;

$conn = DB\connect($config);
if (!$conn) {
  die('Connection error.');
}
