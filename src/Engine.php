<?php

namespace Hexlet\Code\Engine;

use function cli\line;
use function cli\prompt;

function playGame(string $greeting, callable $game)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($greeting);

    for ($i = 0; $i < 3; $i++) {
        [$question, $trueAnswer] = $game();
        line('Question: %s', $question);
        $userAnswer = prompt('Your answer');

        if ($userAnswer === $trueAnswer) {
            line('Correct!');
        } else {
            line("'" . $userAnswer . "' is wrong answer ;(. Correct answer was '" . $trueAnswer . "'");
            line("Let's try again, %s!", $name);

            return;
        }
    }
        line("Congratulations, %s!", $name);
}
