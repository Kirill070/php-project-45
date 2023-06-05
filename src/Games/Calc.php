<?php

namespace Hexlet\Code\Calc;

use function cli\line;
use function cli\prompt;
use function Hexlet\Code\Engine\greeting;

function runGameCalc()
{
    $description = 'What is the result of the expression?';

    greeting($description);
}