<?php
function view($path, $data = null)
{
  if ($data) {
    extract($data);
  }

  $path = $path . '.tmpl.php';
  include "views/layout.php";


}
