<?php

define('MAILING_LIST', 'mailing_list.php');
function add_register_user($name, $email){
  // secure this file
  file_put_contents(MAILING_LIST, "$name: $email\n", FILE_APPEND );
}

function old($key){
  if (empty($_REQUEST[$key])) {
    return htmlspecialchars($_REQUEST[$key]);
  }
  return '';
}

function validate_email($email){
  return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function get_registered_users($path = MAILING_LIST){
  $users = file($path);
  if (count($users)) {
    return array_map(function($user){
      return explode(': ', htmlspecialchars($user));
    },$users);
  }

  return false;
}
