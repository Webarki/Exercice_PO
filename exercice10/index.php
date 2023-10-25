<?php
interface ActionInterface
{
    public function courrir();
    public function marcher();
    public function isAlive();
    public function attack($cible);
    public function superAttack($cible);
    public function deadAttack($cible);
    public function regenerer();
}

// class Programmation Objet Orienté
class Personnage implements ActionInterface
{
    //attribut 
    private $name = "";
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
        return $cible->life = 50;
    }

    public function deadAttack($cible)
    {
        return $cible->life = 0;
    }

    public function regenerer($life = null)
    {
        if (is_null($life)) {
            return $this->life = 100;
        } else {
            return  $this->life += $life;
        }
    }
    public function courrir()
    {
        echo $this->name . ' est en train de courrir ';
    }
    public function marcher()
    {
        echo $this->name . ' est en train de marcher ';
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        return $this->name = $name;
    }
}

$merlin  = new Personnage("Merlin", 100, "Magicien", 99);
$ragnarok = new Personnage("Ragnarok", 100, "Guerrier", 55);

echo $merlin->getName() . ' ' . $merlin->setName('toto');
