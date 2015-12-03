<?php
  if (!empty($_POST)) {
    print_r($_POST);
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Contact Form</h1>
    <form method="post">
      <ul>
        <li>
          <label for="namme">Name</label>
          <input type="text" name="name">
        </li>
        <li><input type="submit" value="Go!"></li>
      </ul>
    </form>
  </body>
</html>
