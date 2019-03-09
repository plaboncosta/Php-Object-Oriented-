<?php

/* 
    Note:
    1. Here $this indicates each created object.
    2. It (->) is called object operator.
*/

class Person
{
    public $name;
    public $title = 'Costa';

    public function getName()
    {
        return $this->name . ' ' . $this->title;
    }

    public function myProfession($profession)
    {
        return $profession;
    }
}

$person1 = new Person();
$person1->name = 'Plabon';
echo $person1->getName();
echo '<br>';

$person2 = new Person();
echo $person2->myProfession('Laravel Developer');
