<?php

function add_register_user($name, $email){
  // secure this file
  file_put_contents('mailing_list.php', "$name: $email\n", FILE_APPEND );
}
