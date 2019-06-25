<?php


namespace DesignPatterns\Behavioral\Observer;

/**
 * 气象站对象
 * Class WeatherData
 * @package DesignPatterns\Observer
 */
class WeatherData implements Subject
{
    private $temperature;
    private $humidity;
    private $pressure;
    private $observers = [];

    /**
     * 注册观察者
     * @param Observer $o
     */
    public function registerObserver(Observer $o): void
    {
        $this->observers[] = $o;
    }

    /**
     * 移除观察者
     * @param Observer $observer
     */
    public function removeObserver(Observer $observer): void
    {
        $key = array_search($o, $this->observers, true);
        if ((bool)$key) {
            unset($this->observers[$key]);
        }
    }

    /**
     * 通知所有观察者
     */
    public function notifyObservers(): void
    {
        foreach ($this->observers as $key => $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
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
     * 获取温度值
     * @return float
     */
    public function getTemperature(): float
    {
        return $this->temperature;
    }

    /**
     * 获取湿度值
     * @return float
     */
    public function getHumidity(): float
    {
        return $this->humidity;
    }

    /**
     * 获取压力值
     * @return float
     */
    public function getPressure(): float
    {
        return $this->pressure;
    }

}