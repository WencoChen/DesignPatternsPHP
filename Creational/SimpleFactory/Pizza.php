<?php


namespace DesignPatterns\Creational\SimpleFactory;

/**
 * Interface Pizza
 * @package DesignPatterns\Creational\SimpleFactory
 */
interface Pizza
{
    public function prepare(): void;

    public function bake(): void;

    public function cut(): void;

    public function box(): void;

}