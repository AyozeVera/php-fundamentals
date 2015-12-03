<?php

function is_logged_in(){
  if (!isset($_SESSION['username'])){
    return false;
  }
  return true;
}

// header('Location: login.php');
// die();
