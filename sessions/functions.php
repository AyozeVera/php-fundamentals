<?php

function is_logged_in(){
  return isset($_SESSION['username']);
}

// header('Location: login.php');
// die();
