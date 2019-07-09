<?php


namespace DesignPatterns\Creational\FactoryMethod;


abstract class PizzaStore
{
    public function orderPizza(string $type):Pizza
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    abstract protected function createPizza(string $type):Pizza;

}