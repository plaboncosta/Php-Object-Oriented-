<?php

/* 
    Note:
    1. Here Destructor function destructs a object when it has completed it's work.
*/

class Person
{
    function __construct()
    {
        print 'In constructor <br>';
        $this->name = 'Something';
    }

    public function myHobby()
    {
        echo 'My hobby is singing and travelling new area.';
    }

    private $all = 'All';

    function __destruct()
    {
        print 'Destroying ' . $this->name . '<br>';
    }
}

$person1 = new Person();
$person1->myHobby();
echo '<br>';