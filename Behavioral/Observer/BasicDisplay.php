<?php


namespace DesignPatterns\Behavioral\Observer;

class BasicDisplay implements Observer, DisplayElement
{
    private $temperature;
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
        }
    }

    public function display(): void
    {
        echo 'The temperature is ' . $this->temperature . 'F degree';
    }

}