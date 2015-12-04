<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      li {list-style: none;}
    </style>
  </head>
  <body>
    <h1>Join the Mailing List</h1>
    <form action="" method="post">
      <?php if (isset($status))   echo $status; ?>
      <ul>
        <li><label for="name">Your Name:</label></li>
        <li><input type="text" name="name" value=""></li>
      </ul>
      <ul>
        <li><label for="email">Your Email:</label></li>
        <li><input type="text" name="email" value=""></li>
      </ul>
      <ul>
        <li><input type="submit" value="Sign Up"></li>
      </ul>

    </form>
  </body>
</html>
