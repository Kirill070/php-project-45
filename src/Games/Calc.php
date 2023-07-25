<?php

namespace BrainGames\Games\Calc;

use Exception;

use function BrainGames\Engine\playGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;

const DESCRIPTION = 'What is the result of the expression?';

function calc(int $num1, int $num2, string $sing): string
{
    switch ($sing) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        default:
            throw new Exception("Error! Invalid math operator: $sing");
    }
}

function runCalc(): void
{
    $gameData = [];

    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i += 1) {
        $num1 = rand(1, 99);
        $num2 = rand(1, 99);

        $sing = ['+', '-', '*'][rand(0, 2)];
        $question = "$num1 $sing $num2";
        $correctAnswer = calc($num1, $num2, $sing);

        $gameData[] = [$question, $correctAnswer];
    }

    playGame(DESCRIPTION, $gameData);
}
