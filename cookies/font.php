<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    setcookie('fontSize', $_POST['font-size'], time() + 60 * 60);
  }

  if (isset($_POST['font-size'])) {
    $font_size = $_POST['font-size'];
  }elseif (isset($_COOKIE['fontSize'])) {
    $font_size = $_COOKIE['fontSize'];
  } else {
    $font_size = 16;
  }
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form action="" method="post">
       <li>
         <label for="font-size">Your preferred font size?</label>
         <select name="font-size" id="font-size">
           <option value="10">10</option>
           <option value="20">20</option>
           <option value="30">30</option>
         </select>
       </li>
       <li>
         <input type="submit" name="submit" value="Submit">
       </li>
     </form>
     <h1>My Page</h1>
     <p style="font-size: <?= $font_size?>px;">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
       tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
       veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
       commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
       velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
       cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
       est laborum.
     </p>
   </body>
 </html>
