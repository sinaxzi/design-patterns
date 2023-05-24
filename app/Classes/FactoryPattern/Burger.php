<?php

namespace App\Classes\FactoryPattern;

class Burger
{
    private $name;
    private $ingredients;
    private $sauce;

    public function __construct($name, $ingredients, $sauce)
    {
        $this->name = $name;

        $this->ingredients = $ingredients;

        $this->sauce = $sauce;

    }

    public function getAttributes()
    {
        return 'the burger name is: ' . $this->name .
         ' , has this ingredients ' . $this->ingredients . 
         'and this sauce ' . $this->sauce;
    }
}

?>