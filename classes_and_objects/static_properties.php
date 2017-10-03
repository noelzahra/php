<?php
//Static properties

class Author
{
    public static $centuryPopular = "19th";

    public static $fullName = "Ernest Hemingway";

    public static function getFullName()
    {
        return self::$fullName;
    }
}

echo Author::$centuryPopular.PHP_EOL;
echo Author::getFullName();