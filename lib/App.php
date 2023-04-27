<?php

namespace Lib;

class App
{
    protected $registeredCommands = [
        'help'     => 'help',
        'tree' => 'TreeStructure'
    ];

    public function runCommand(array $argv = [])
    {
        $commandName = "help";

        if (isset($argv[1])) {
            $commandName = $argv[1];
        }

        $class = $this->getCommand($commandName);

        if ($class === null) {
            //TODO:: exception ...
        }

        call_user_func(array('App\\' . $class, 'run'), $argv);
    }

    public function getCommand($command)
    {
        return isset($this->registeredCommands[$command]) ? $this->registeredCommands[$command] : null;
    }
}
