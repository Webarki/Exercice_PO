<?php

// class Programmation Objet Orienté
class personnage
{
    //attribut 
    public $name = "";
    public $espece = "";
    public $age = 0;
    public $life = 0;
    public $atk = 0;
    private $alive = true;

    public function __construct($name, $life, $espece, $age, $atk)
    {
        $this->espece = $espece;
        $this->life = $life;
        $this->name = $name;
        $this->age = $age;
        $this->atk = $atk;
    }
    public function isAlive()
    {
        if ($this->life != 0) {
            echo "Le personnage est vivant";
        } else {
            echo "Le personnage est mort";
        }
    }

    public function superAttack($cible)
    {
        return $cible->life = 10;
    }

    public function attack($cible)
    {
        return $cible->life -= $this->atk;
    }

    public function deadAttack($cible)
    {
        return $cible->life = 0;
    }
}

$merlin  = new personnage("Merlin", 100, "Magicien", 99, 50);
$ragnarok = new personnage("Ragnarok", 100, "Guerrier", 55, 80);

$ragnarok->attack($merlin);

var_dump($merlin);
