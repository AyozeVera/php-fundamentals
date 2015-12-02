<?php

$post = [
  'author'=>'Ayoze Vera',
  'title'=>'My Awsome Post',
  'body'=>'Here is the body',
  'publish-date'=>'6-10-2012'
];

$email = <<<EOT
<h1>{$post['title']}</h1>
<p>{$post['author']}</p>
<div>
  {$post['body']}
</div>
EOT;

echo $email;
