<?php


namespace DesignPatterns\Creational\SimpleFactory;

/**
 * Class PizzaStore
 * @package DesignPatterns\Creational\SimpleFactory
 */
class PizzaStore
{
    private $factory;

    /**
     * PizzaStore constructor.
     * @param SimplePizzaFactory $factory
     */
    public function __construct(SimplePizzaFactory $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @param string $type
     * @return Pizza
     */
    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->factory->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        return $pizza;
    }

}