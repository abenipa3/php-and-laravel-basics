<?php

require 'functions.php';
//require 'router.php';

// Connect to our MySQL Database - PDO (PHP Data Objects)

class Person {
    public $name;
    public $age;

    public function breathe()
    {
        echo "breathing";

    }
}

$person = new Person();

$person->name = 'John Doe';
$person->age = '25';

dd($person->breathe());