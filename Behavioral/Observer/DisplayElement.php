<?php


namespace DesignPatterns\Behavioral\Observer;

/**
 * 展示元素接口
 * Interface DisplayElement
 * @package DesignPatterns\Observer
 */
interface DisplayElement
{
    /**
     * 展示
     */
    public function display(): void;

}