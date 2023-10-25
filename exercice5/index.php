<?php
// class Programmation Objet Orienté
class personnage
{
    //attribut 
    public $name = "";
    public $espece = "";
    public $age = 0;
    public $life = 0;
    private $alive = true;

    public function __construct($name, $life, $espece, $age)
    {
        $this->espece = $espece;
        $this->life = $life;
        $this->name = $name;
        $this->age = $age;
    }
    public function isAlive()
    {
        if ($this->life != 0) {
            echo "Le personnage est vivant ";
        } else {
            echo "Le personnage est mort ";
        }
    }

    public function superAttack($cible)
    {
        return $cible->life = 10;
    }

    public function attack($cible)
    {
        return  $cible->life = 50;
    }

    public function deadAttack($cible)
    {
        return $cible->life = 0;
    }

    public function regenere($life = null)
    {
        if (is_null($life)) {
            return $this->life = 100;
        } else {
            return  $this->life += $life;
        }
    }
}

$merlin  = new personnage("Merlin", 100, "Magicien", 99);
$ragnarok = new personnage("Ragnarok", 100, "Guerrier", 55);
$ragnarok->deadAttack($merlin);
$merlin->isAlive();
$merlin->regenere();
$merlin->isAlive();
var_dump($merlin);
