<?php

$month = 'January';

$months=[
  'January' => 'It is Jan!',
  'February' => 'It is Feb!',
  'March' => 'It is March!',
];
echo $months['January'];
echo isset($months[$month]) ? $months[$month] : 'Not the right month';
