<?php

class House
{
  public $home_color = 'white';
  // private $home_color = 'white';
  // protected $home_color = 'white';
  public function __construct(){
    echo 'Running';
  }

}

$house = new House();
echo $house->home_color;
