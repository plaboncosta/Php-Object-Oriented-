<?php

/* 
    Note:
    1. Abstract Class will define method signature(parameter)
    2. Child class will implements those method.
*/


// Abstract Class(Parent Class)
abstract class AbstractClass
{
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    // Common method
    public function printOut()
    {
        return $this->getValue() . '<br>';
    }
}


// Child Class
class Person extends AbstractClass
{
    protected function getValue()
    {
        return 'Person1';
    }

    public function prefixValue($prefix)
    {
        return $prefix;
    }
}

$person1 = new Person();
echo $person1->printOut();



