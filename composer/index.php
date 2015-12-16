<?php
require_once 'vendor/php-activerecord/php-activerecord/ActiveRecord.php';

ActiveRecord\Config:: initialize(function($cfg){
  $cfg->set_model_directory('models');
  $cfg->set_connections([
                        'development' => 'mysql://root:1234@127.0.0.1/blog'
                        ]);
});

$post = Post::find_by_title("My second post");
print_r($post);
