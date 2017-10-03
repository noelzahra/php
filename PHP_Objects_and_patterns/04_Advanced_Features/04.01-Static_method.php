<?php
// Static method are functions with class scope

class StaticClass
{
    public static $num = 6;

    public static function sayHello()
    {
        //self:: is used to access var or methods within the same class, class access to its own method
        //self:: is similar to $this pseudo-element giving objects access in a class
        //parent:: is used to access superclass functions from a child class

        self::$num++;
        print "Hello (" . self::$num . ")\n";
    }
}

print StaticClass::$num . "\n";
StaticClass::sayHello();