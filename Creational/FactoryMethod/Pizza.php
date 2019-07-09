<?php


namespace DesignPatterns\Creational\FactoryMethod;


abstract class Pizza
{
    protected $name;
    protected $dough;
    protected $sauce;
    protected $toppings = [];

    abstract public function prepare(): void;

    abstract public function bake(): void;

    abstract public function cut(): void;

    abstract public function box(): void;

}