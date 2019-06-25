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
     * @param object $arg
     */
    public function update(Subject $subject, object $arg): void;

}