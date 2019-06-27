<?php


namespace DesignPatterns\Behavioral\Observer;

/**
 * 观察者接口
 * Interface Observer
 * @package DesignPatterns\Observer
 */
interface Observer
{
    /**
     * @param Subject $subject
     */
    public function update(Subject $subject): void;

}