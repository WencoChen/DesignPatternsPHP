<?php

namespace DesignPatterns\Structural\Decorator;

abstract class CondimentDecorator implements Beverage
{
    protected $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

}