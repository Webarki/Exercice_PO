<?php

class Database
{
    protected $db;

    public function __construct()
    {
        echo $this->db = 'Yeahhhhh';
    }
}

// class Programmation Objet Orienté
class Test extends Database
{

    public function __construct()
    {
        parent::__construct();
    }

    public function view()
    {
        return $this->db;
    }
}

$objet  = new Test();
$objet->view();
