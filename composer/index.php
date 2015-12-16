<?php
require_once 'vendor/php-activerecord/php-activerecord/ActiveRecord.php';

ActiveRecord\Config:: initialize(function($cfg){
  $cfg->set_model_directory('models');
  $cfg->set_connections([
                        'development' => 'mysql://root:1234@127.0.0.1/blog'
                        ]);
});

$posts = Post::all();
print_r($posts);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php foreach ($posts as $p) : ?>
      <article>
        <h2><?php echo $p->title; ?></h2>
        <div class="body">
          <?php echo $p->body; ?>
        </div>
      </article>
    <?php endforeach; ?>
  </body>
</html>
 
