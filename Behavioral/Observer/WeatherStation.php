<?php


namespace DesignPatterns\Behavioral\Observer;

use \SplObjectStorage;

/**
 * 气象站对象
 * Class WeatherStation
 * @package DesignPatterns\Observer
 */
class WeatherStation implements Subject
{
    private $temperature;
    private $humidity;
    private $pressure;
    private $observers;

    /**
     * WeatherStation constructor.
     */
    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    /**
     * @param Observer $observer
     */
    public function registerObserver(Observer $observer): void
    {
        $this->observers->attach($observer);
    }

    /**
     * 移除观察者
     * @param Observer $observer
     */
    public function removeObserver(Observer $observer): void
    {
        if ($this->observers->contains($observer)) {
            $this->observers->detach($observer);
        }
    }

    /**
     * 通知所有观察者
     */
    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * 测量值改变
     */
    public function measurementsChanged(): void
    {
        $this->notifyObservers();
    }

    /**
     * 设定测量值
     * @param float $temperature
     * @param float $humidity
     * @param float $pressure
     */
    public function setMeasurements(float $temperature, float $humidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }

    /**
     * @return float
     */
    public function getTemperature(): float
    {
        return $this->temperature;
    }

    /**
     * @return float
     */
    public function getHumidity(): float
    {
        return $this->humidity;
    }

    /**
     * @return float
     */
    public function getPressure(): float
    {
        return $this->pressure;
    }


}