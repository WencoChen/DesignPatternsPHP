<?php


namespace DesignPatterns\Creational\SimpleFactory;

/**
 * Class CheesePizza
 * @package DesignPatterns\Creational\SimpleFactory
 */
class CheesePizza implements Pizza
{

    public function prepare(): void
    {
        sleep(1);
    }

    public function bake(): void
    {
        sleep(1);
    }

    public function cut(): void
    {
        sleep(1);
    }

    public function box(): void
    {
        sleep(1);
    }

}