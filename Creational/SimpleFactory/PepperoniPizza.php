<?php


namespace DesignPatterns\Creational\SimpleFactory;

/**
 * Class PepperoniPizza
 * @package DesignPatterns\Creational\SimpleFactory
 */
class PepperoniPizza implements Pizza
{
    public function prepare(): void
    {
        sleep(2);
    }

    public function bake(): void
    {
        sleep(2);
    }

    public function cut(): void
    {
        sleep(2);
    }

    public function box(): void
    {
        sleep(2);
    }

}