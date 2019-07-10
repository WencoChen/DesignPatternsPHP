<?php


namespace DesignPatterns\Behavioral\Command;


class RemoteControl
{
    private $onCommands = [];
    private $offCommands = [];
    private $undoCommand;

    /**
     * @param int $slot
     * @param Command $onCommand
     * @param Command $offCommand
     */
    public function setCommand(int $slot, Command $onCommand, Command $offCommand): void
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    /**
     * @param int $slot
     */
    public function onCommandWasPressed(int $slot): void
    {
        $this->onCommands[$slot]->execute();
        $this->undoCommand = $this->onCommands[$slot];
    }

    /**
     * @param int $slot
     */
    public function offCommandWasPressed(int $slot): void
    {
        $this->offCommands[$slot]->execute();
        $this->undoCommand = $this->offCommands[$slot];
    }

    public function undoCommandWasPressed(): void
    {
        $this->undoCommand->undo();
    }

}