<?php
class Person
{
    public static $name = "Ja'far bin Abu Thalib";

    public function __construct()
    {
        self::$name = "tes";
    }

    public static function hello()
    {
        return self::$name = "siap";
    }
}

var_dump (new Person);
var_dump (Person::$name);
echo Person::hello();