<?php

namespace Hexlet\Code\Engine;

use function cli\line;
use function cli\prompt;

function greeting(string $greeting)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($greeting);

    return $name;
}

function playGame(string $name, array $game)
{
    [$question, $trueAnswer] = $game;

    line('Question: %s', $question);
    $userAnswer = prompt('Your answer');

    if ($userAnswer === $trueAnswer) {
        line('Correct!');
        $result = true;
    } else {
        line("'" . $userAnswer . "' is wrong answer ;(. Correct answer was '" . $trueAnswer . "'");
        $result = false;
    }

    return $result;
}
