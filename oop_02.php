<?php
/* 
    Note: 
    1. Here :: is scope resolution operator.
    2. static defines static context for each object
    3. Only class can defines static context value
    4. Here self indicates only class  
*/

class Person
{
    public static $name;
    public static function myName()
    {
        return self::$name;
    }
}

Person::$name = 'Plabon';
$person1 = new Person();
echo $person1::$name;
echo '<br>';

$person2 = new Person();
echo $person2::$name;