<?php

class Person
{ //^ class

    public string $name;
    public string $hairColor;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName() {}

    public static function fetchUsers($snapKey, $key) {}
}


$person1 = new Person('gerrie');
$person2 = new Person('piet');

echo $person1->name;

// $person1->getName();//^ call functon in class via object 
// $person2->getName();

class DatabaseMysql {

    public function fetchData() {

    }

}

class User {

    public $database;


    public function __construct() {
        $this->database = new DatabaseMysql();
    }
}