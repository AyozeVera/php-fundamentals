<?php

function add_register_user($name, $email){
  // secure this file
  file_put_contents('mailing_list.php', "$name: $email\n", FILE_APPEND );
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
