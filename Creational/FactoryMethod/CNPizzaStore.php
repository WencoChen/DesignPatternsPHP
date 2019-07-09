<?php


namespace DesignPatterns\Creational\FactoryMethod;


class CNPizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        switch ($type){
            case 'cheese':
                $pizza = new CNCheesePizza();
                break;
            case 'clam':
                $pizza = new CNClamPizza();
                break;
            default:
                $pizza = new CNClamPizza();
                break;
        }

        return $pizza;
    }

}