<?php
session_start();

define('USERNAME', 'ayo');
define('PASSWORD', '1234');

if (isset($_POST['loginForm'])) {
  //get values
  $username = $_POST['username'];
  $password = $_POST['password'];

  //validate values
  if ($username === USERNAME && $password === PASSWORD) {

    //login + set session
    $_SESSION['username'] = $username;
    header("Location: admin.php");
  }else {
    $status = "Incorrect login credentials";
  }
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
    <?= $status ?>
  </body>
</html>
