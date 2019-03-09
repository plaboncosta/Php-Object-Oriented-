<?php

/* 
    Note: 
    1. Constructor function executes every time when a object created.
    2. When a child class extends parent class it's automatically calls the constructor function.
    3. If you want to call both child class and parent class constructor just include the parent::__construct(); inside the child constructor function.
*/


// Parent Class
class Person
{
    public function __construct()
    {
        print 'From the constructor <br>';
    }

    public function getResult($result)
    {
        echo $result;
    }
}

/* $person1 = new Person();
$person1->getResult('First division');
echo '<br>';

$person2 = new Person();
$person2->getResult('Second Division'); */


// Child Class
class Plabon extends Person
{
    function __construct()
    {
        parent::__construct();
        print 'From the child class <br>';  
    }

    public $child = 'Udoy Costa';
}

$child1 = new Plabon();
echo $child1->child;