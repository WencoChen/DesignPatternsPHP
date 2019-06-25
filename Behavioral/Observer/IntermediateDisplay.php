<?php


namespace DesignPatterns\Behavioral\Observer;


class IntermediateDisplay implements Observer, DisplayElement
{
    private $temperature;
    private $humidity;
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
        }
    }

    public function display(): void
    {
        echo 'The temperature is ' . $this->temperature . 'F degree and humidity is ' . $this->humidity . '%';
    }

}