<?php

namespace Lib;

use Lib\Exception;
use \Bramus\Ansi\Ansi;
use \Bramus\Ansi\Writers\StreamWriter;
use \Bramus\Ansi\ControlSequences\EscapeSequences\Enums\SGR;

class CliPrinter
{
    protected $ansi;

    public function __construct()
    {
        $this->ansi = new Ansi(new StreamWriter('php://stdout'));
    }

    public function display($message)
    {

        $this->ansi->color(array(SGR::COLOR_FG_WHITE, SGR::COLOR_BG_GREEN))
            ->blink()
            ->text($message)
            ->nostyle()
            ->lf()
            ->bell();
    }
}
