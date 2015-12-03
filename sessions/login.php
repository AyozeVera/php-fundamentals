<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  echo "Posted";
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Login</h1>

    <form action="login.php" method="post">
      <ul>
        <li>
          <label for="username">Username:</label>
          <input type="text" name="username">
        </li>
        <li>
          <label for="password">Password:</label>
          <input type="password" name="password">
        </li>
        <li>
          <input type="submit" name="loginForm" value="Login">
        </li>
      </ul>

    </form>
  </body>
</html>
