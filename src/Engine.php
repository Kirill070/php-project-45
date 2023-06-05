<?php

namespace Hexlet\Code\Engine;

use function cli\line;
use function cli\prompt;

function greeting($greeting)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($greeting);
}