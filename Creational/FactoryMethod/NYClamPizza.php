<?php


namespace DesignPatterns\Creational\FactoryMethod;


class NYClamPizza extends Pizza
{
    public function prepare(): void
    {
        sleep(2);
    }

    public function bake(): void
    {
        sleep(4);
    }

    public function cut(): void
    {
        sleep(3);
    }

    public function box(): void
    {
        sleep(2);
    }

}