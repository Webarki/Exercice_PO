<?php
//class Programmation Objet Orienté
class personnage
{
  //attribut 
  public $name = "";
  public $espece = "";
  public $age = 0;
  public $alive = true;

  public function __construct($name, $espece, $age)
  {
    $this->espece = $espece;
    $this->name = $name;
    $this->age = $age;
  }
}

$merlin  = new personnage("Merlin", "Magicien", 99);
$ragnarok = new personnage("Ragnarok", "Guerrier", 55);

echo $merlin->name . " est un magicien qui à" . $merlin->age . " ans";

var_dump($merlin, $ragnarok);
