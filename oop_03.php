<?php


// Parent Class
class Person
{
    public $profession = 'Laravel Web Developer';

    public function getFullName($fullname)
    {
        return $fullname;
    }
}


// Child Class
class Plabon extends Person
{

}

$person1 = new Plabon();
echo $person1->profession;
echo '<br>';
echo $person1->getFullName('Plabon Joseph Costa');
