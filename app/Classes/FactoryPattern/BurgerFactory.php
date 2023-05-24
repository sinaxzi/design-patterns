<?php

namespace App\Classes\FactoryPattern;

class BurgerFactory
{
    public static function createNormalBurger()
    {
        $name = 'normal burger';
        $ingredients = 'bread-meat-sauce-tomato';
        $sauce = 'ketchup';
        return new Burger($name, $ingredients, $sauce);
    }

    public static function createCheeseBurger()
    {
        $name = 'cheese burger';
        $ingredients = 'bread-cheese-meat-sauce-tomato';
        $sauce = 'ketchup';
        return new Burger($name, $ingredients, $sauce);
    }

    public static function createMushroomBurger()
    {
        $name = 'mushroom burger';
        $ingredients = 'bread-mushroom-meat-sauce-tomato';
        $sauce = 'mayonnaise';
        return new Burger($name, $ingredients, $sauce);
    }
}

?>