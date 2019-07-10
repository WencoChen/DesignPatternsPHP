<?php


namespace DesignPatterns\Behavioral\Command;


class MacroCommand implements Command
{
    private $commands = [];
    private $undoCommands = [];

    /**
     * MacroCommand constructor.
     * @param array $commands
     */
    public function __construct(array $commands)
    {
        if ($commands instanceof Command) {
            $this->commands = $commands;
        }
    }


    /**
     * execute
     */
    public function execute(): void
    {
        foreach ($this->commands as $command) {
            $command->execute();
            $this->undoCommands[] = $command;
        }
    }

    /**
     * undo
     */
    public function undo(): void
    {
        foreach ($this->undoCommands as $undoCommand) {
            $undoCommand->undo();
        }
    }

}