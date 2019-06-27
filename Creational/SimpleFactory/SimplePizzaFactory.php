<?php


namespace DesignPatterns\Creational\SimpleFactory;

/**
 * Class SimplePizzaFactory
 * @package DesignPatterns\Creational\SimpleFactory
 */
class SimplePizzaFactory
{
    /**
     * @param string $type
     * @return Pizza
     */
    public function createPizza(string $type):Pizza {
        $pizza = null;
        switch ($type){
            case 'cheese':
                $pizza = new CheesePizza();
                break;
            case 'pepperoni':
                $pizza = new PepperoniPizza();
                break;
        }
        return $pizza;
    }

}