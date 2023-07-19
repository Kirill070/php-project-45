<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const NUMBER_OF_ROUNDS = 3;

function playGame(string $description, array $game): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($description);

    foreach ($game as [$question, $correctAnswer]) {
        line('Question: %s', $question);
        $userAnswer = prompt('Your answer');

        if ($userAnswer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $correctAnswer);
            line("Let's try again, %s!", $name);

            return;
        }
    }
        line("Congratulations, %s!", $name);
}
