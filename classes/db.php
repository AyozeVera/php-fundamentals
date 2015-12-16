<?php
class House {

  public $home_color = 'white';
  public $rooms = 3;

  public function __construct($home_color = null){
    if ($home_color) {
      $this->hombe_color = $home_color;
    }
  }

  public function add_room(){
    $this->rooms++;
  }

}

$house = new House('red');
$house->add_room();
$house->add_room();
echo "This {$house->home_color} house has {$house->rooms} rooms.";

echo "<br>";

$house2 =  new House();
$house2->add_room();
$house2->add_room();
$house2->add_room();
$house2->add_room();
$house2->add_room();
$house2->add_room();
$house2->add_room();
echo "This {$house2->home_color} house has {$house2->rooms} rooms.";
