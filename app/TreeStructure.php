<?php

namespace App;

use Lib\CliPrinter;

class TreeStructure
{
    public static function run()
    {
        $printer = new CliPrinter();
        $printer->display('Hello!');
    }
}
