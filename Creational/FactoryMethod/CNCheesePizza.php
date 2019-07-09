<?php


namespace DesignPatterns\Creational\FactoryMethod;


class CNCheesePizza extends Pizza
{
    public function prepare(): void
    {
        sleep(3);
    }

    public function bake(): void
    {
        sleep(5);
    }

    public function cut(): void
    {
        sleep(2);
    }

    public function box(): void
    {
        sleep(1);
    }

}