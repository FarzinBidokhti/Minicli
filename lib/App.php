<?php

namespace Minicli;

class App
{
    protected $printer;

    protected $registry = ['say:hello' => 'welcome', 'help' => 'help'];

    public function __construct()
    {
        $this->printer = new CliPrinter();
    }

    public function getPrinter()
    {
        return $this->printer;
    }

    public function runCommand(array $argv = [])
    {
        $commandName = "help";

        if (isset($argv[1])) {
            $commandName = $argv[1];
        }

        $command = $this->getCommand($commandName);

        if ($command === null) {
            $this->getPrinter()->display("ERROR: Command \"$commandName\" not found.");
            exit;
        }

        call_user_func(array($this, $command), $argv);
    }

    public function getCommand($command)
    {
        return isset($this->registry[$command]) ? $this->registry[$command] : null;
    }

    protected function welcome($arg)
    {
        $arg = isset($arg[2]) ? $arg[2] : "null";
        $this->getPrinter()->display("Result:: $arg");
    }

    protected function help($arg)
    {
        $this->getPrinter()->display("Run:: php satrun say:hello Farzin");
    }
}
