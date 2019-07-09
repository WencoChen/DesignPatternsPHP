<?php


namespace DesignPatterns\Behavioral\Command;


class Light
{
    protected $position;

    public function __construct(string $position)
    {
        $this->position = $position;
    }

    public function on(): void
    {
        echo 'Lights of ' . $this->position . ' are on';
    }

    public function off(): void
    {
        echo 'Lights of ' . $this->position . ' are off';
    }

}