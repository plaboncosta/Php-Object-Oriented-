<?php

/* 
    Note: 
    ~~~~~~~~~~~ Visibility key: public, protected, private ~~~~~~~~~~~
    1. Public keyword is free to access from anywhere.
    2. Protected keyword is accessible only from main class and extended class(No object can access any protected method and protected property)
    3. Private keyword is access from only main class(No object can access any method and property)
    4. Declaration of property, method without using visibility key would be run as public.
*/

class Person
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    public function printHello()
    {
        echo $this->public;
        echo '<br>';
        echo $this->protected;
        echo '<br>';
        echo $this->private;
    }
}

$person1 = new Person();
// echo $person1->public;
// echo '<br>';
// echo $person1->protected;
// echo '<br>';
// echo $person1->private;

// echo $person1->printHello();


class Plabon extends Person
{
    public function printHello()
    {
        echo $this->public;
        echo '<br>';
        echo $this->protected;
        echo '<br>';
        echo $this->private;
    }
}

$person2 = new Plabon();
echo $person2->printHello();