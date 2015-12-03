<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') print_r($_POST);
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
          <input type="text" name="name" id="name">
        </li>
        <li>
          <label for="email">Email</label>
          <input type="text" name="email" id="email">
        </li>
        <li>
          <label for="message">Message</label>
          <textarea name="message" id="message"></textarea>
        </li>
        <li><input type="submit" value="Go!"></li>
      </ul>
    </form>
  </body>
</html>
