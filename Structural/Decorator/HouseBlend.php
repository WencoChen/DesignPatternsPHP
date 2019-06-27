<?php


namespace DesignPatterns\Structural\Decorator;


class HouseBlend implements Beverage
{
    public function getDescription(): string
    {
        return 'house blend';
    }

    public function cost(): float
    {
        return 0.98;
    }

}