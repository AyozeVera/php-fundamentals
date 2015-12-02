<?php

class Person {
  public $name;
  public $job;

  public function _construct($name, $job)
  {
    $this->name = $name;
    $this->job = $job;
  }

  public function communicate($style = 'voice')
  {
    return 'communicating with ' . $style;
  }

}

$p = new Person("Ayo", "Student");
echo $p->communicate('telepathy');
