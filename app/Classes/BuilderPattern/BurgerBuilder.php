<?php

namespace App\Classes\BuilderPattern;

class BurgerBuilder
{
    public $burger;

    public function __construct($name)
    {
        $this->burger = new Burger($name);
    }

    public function addIngredients($ingredients)
    {
        $this->burger->ingredients = $ingredients;
    }

    public function addSauce($sauce)
    {
        $this->burger->sauce = $sauce;
    }

    public function build($ingredients = null,$sauce = null){

        $this->addIngredients($ingredients);
        $this->addSauce($sauce);

        return $this->burger;
    }
}

?>