<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function playGame(string $greeting, callable $game): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($greeting);

    for ($i = 0; $i < 3; $i += 1) {
        [$question, $correctAnswer] = $game();
        line('Question: %s', $question);
        $userAnswer = prompt('Your answer');

        if ($userAnswer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'" . $userAnswer . "' is wrong answer ;(. Correct answer was '" . $correctAnswer . "'");
            line("Let's try again, %s!", $name);

            return;
        }
    }
        line("Congratulations, %s!", $name);
}
