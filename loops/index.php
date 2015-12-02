<?php

$arr = [
  'dev' => 'Ayo',
  'design' => 'Alex',
  'ceo' => 'Domingo'
];
foreach ($arr as $title => $name) {
  echo "<li><strong>$title</strong> -- $name</li>";
}
