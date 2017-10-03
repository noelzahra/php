<?php
//Static keyword help you access a property or method directly from class
//ClassName::method()


class StaticExample
{
    public static $num = 0;

    public static function count()
    {   
        for($i = 0; $i < 4; $i++)
        {
            //$this pseudo-variable cannot be used inside a static method use self instead
            self::$num++;
            echo "Count at " . self::$num . "\n";
        }
    }
}

//static method is accessed via a class no need to instantiate it
echo StaticExample::count();
echo StaticExample::$num;
