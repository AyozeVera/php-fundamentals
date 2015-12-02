<?php

$post = [
  'author'=>'Ayoze Vera',
  'title'=>'My Awsome Post',
  'body'=>'Here is the body',
  'publish-date'=>'6-10-2012'
];

extract($post);

echo $author;
