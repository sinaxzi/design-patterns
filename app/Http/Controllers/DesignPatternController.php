<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\FactoryPattern\BurgerFactory;
use App\Classes\BuilderPattern\BurgerBuilder;

class DesignPatternController extends Controller
{
    public function factoryCreate()
    {
        return view('factory.create');
    }

    public function factoryStore(Request $request)
    {
        $burger = null;
        switch ($request->burger) {
            case 'normal':
                $burger = BurgerFactory::createNormalBurger();
                break;
            case 'cheese':
                $burger = BurgerFactory::createCheeseBurger();
                break;
            case 'mushroom':
                $burger = BurgerFactory::createMushroomBurger();
                break;
        }
        
        return view('factory.show',['burger' => $burger->getAttributes()]);
    }

    public function builderCreate()
    {
        return view('builder.create');
    }

    public function builderStore(Request $request)
    {
        $burger = new BurgerBuilder($request->name);
        $burger->build($request->ingredients,$request->sauce);

        return view('builder.show',['burger' => $burger->burger]);
    }
}