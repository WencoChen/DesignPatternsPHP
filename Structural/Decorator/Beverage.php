<?php

namespace DesignPatterns\Structural\Decorator;

interface Beverage {

    public function getDescription():string;

    public function cost():float;
}
