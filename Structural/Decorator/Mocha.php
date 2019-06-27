<?php


namespace DesignPatterns\Structural\Decorator;


class Mocha extends CondimentDecorator
{
    private const PRICE = 0.5;

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ' with mocha';
    }

    public function cost(): float
    {
        return $this->beverage->cost() + self::PRICE;
    }

}