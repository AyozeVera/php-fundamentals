<?php

$post = [
  'author'=>'Ayoze Vera',
  'title'=>'My Awsome Post',
  'body'=>'Here is the body',
  'publish-date'=>'6-10-2012'
];

$email = "<h1>{$post['title']}</h1>";
$email .= "<p> By: {$post['author']}</p>";
$email .= "<div>{$post['body']}</div>";

$email = sprintf("<h1>%s</h1><p>%s</p><div>%s</div>", $post['title'], $post['author'],$post['body']);

echo $email;
