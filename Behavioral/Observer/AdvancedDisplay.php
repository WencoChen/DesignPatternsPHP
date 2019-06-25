<?php


namespace DesignPatterns\Behavioral\Observer;


class AdvancedDisplay implements Observer, DisplayElement
{
    private $temperature;
    private $humidity;
    private $pressure;
    private $weatherData;

    public function __construct(Subject $subject)
    {
        $this->weatherData = $subject;
        $subject->registerObserver($this);
    }

    public function update(Subject $subject, object $arg): void
    {
        if ($subject instanceof WeatherData) {
            $this->temperature = $subject->getTemperature();
            $this->humidity = $subject->getHumidity();
            $this->pressure = $subject->getPressure();
        }
    }

    public function display(): void
    {
        echo 'The temperature is ' . $this->temperature . 'F degree and humidity is '
            . $this->humidity . '% and pressure is ' . $this->pressure;
    }

}