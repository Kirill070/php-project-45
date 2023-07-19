<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\playGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;

const DESCRIPTION = 'What is the result of the expression?';

function gameTask(): array
{
    $num1 = rand(1, 99);
    $num2 = rand(1, 99);
    $operation = rand(1, 3);

    switch ($operation) {
        case 1:
            $question = "{$num1} + {$num2}";
            $correctAnswer = $num1 + $num2;
            break;
        case 2:
            $question = "{$num1} - {$num2}";
            $correctAnswer = $num1 - $num2;
            break;
        case 3:
            $question = "{$num1} * {$num2}";
            $correctAnswer = $num1 * $num2;
            break;
    }

    $correctAnswer = (string) $correctAnswer;

    return [$question, $correctAnswer];
}

function runGameCalc(): void
{
    $game = [];

    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i += 1) {
        $game[] = gameTask();
    }

    playGame(DESCRIPTION, $game);
}
