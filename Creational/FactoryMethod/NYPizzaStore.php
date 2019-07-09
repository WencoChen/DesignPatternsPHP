<?php


namespace DesignPatterns\Creational\FactoryMethod;


class NYPizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        switch ($type){
            case 'cheese':
                $pizza = new NYCheesePizza();
                break;
            case 'clam':
                $pizza = new NYClamPizza();
                break;
            default:
                $pizza = new NYClamPizza();
                break;
        }

        return $pizza;
    }

}