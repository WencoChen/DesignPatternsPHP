<?php


namespace DesignPatterns\Behavioral\Observer;

/**
 * 显示器
 * Class Monitor
 * @package DesignPatterns\Behavioral\Observer
 */
class Monitor implements Observer, DisplayElement
{
    private $weatherData;
    private $temperature;
    private $humidity;
    private $pressure;

    /**
     * Monitor constructor.
     * @param Subject $subject
     */
    public function __construct(Subject $subject)
    {
        $this->weatherData = $subject;
        $subject->registerObserver($this);
    }

    /**
     * @param Subject $subject
     */
    public function update(Subject $subject): void
    {
        if ($subject instanceof WeatherStation) {
            $this->temperature = $subject->getTemperature();
            $this->humidity = $subject->getHumidity();
            $this->pressure = $subject->getPressure();
        }
    }

    public function display(): void
    {
        echo 'Temperature: ' . $this->temperature . PHP_EOL .
            'Humidity: ' . $this->humidity . PHP_EOL .
            'Pressure: ' . $this->pressure;
    }
}