<?php


namespace DesignPatterns\Behavioral\Command;


class RemoteControl
{
    private $onCommands = [];
    private $offCommands = [];

    public function setCommand(int $slot, Command $onCommand, Command $offCommand): void
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onCommandWasPressed(int $slot): void
    {
        $this->onCommands[$slot]->execute();
    }

    public function offCommandWasPressed(int $slot): void
    {
        $this->offCommands[$slot]->execute();
    }

}