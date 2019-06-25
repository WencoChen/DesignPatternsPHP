<?php

namespace DesignPatterns\Behavioral\Observer;

/**
 * 主题接口
 * Interface Subject
 * @package DesignPatterns\Observer
 */
interface Subject
{
    /**
     * 注册
     * @param Observer $observer
     */
    public function registerObserver(Observer $observer): void;

    /**
     * 移除
     * @param Observer $observer
     */
    public function removeObserver(Observer $observer): void;

    /**
     * 通知观察者
     */
    public function notifyObservers(): void;
}