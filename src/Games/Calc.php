<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\playGame;

const DESCRIPTION = 'What is the result of the expression?';

function runGameCalc(): void
{
    $task = function (): array {
        $num1 = rand(1, 99);
        $num2 = rand(1, 99);
        $operation = rand(1, 3);

        switch ($operation) {
            case 1:
                $question = "{$num1} + {$num2}";
                $trueAnswer = $num1 + $num2;
                break;
            case 2:
                $question = "{$num1} - {$num2}";
                $trueAnswer = $num1 - $num2;
                break;
            case 3:
                $question = "{$num1} * {$num2}";
                $trueAnswer = $num1 * $num2;
                break;
        }

        $trueAnswer = (string) $trueAnswer;
        return [$question, $trueAnswer];
    };

    playGame(DESCRIPTION, $task);
}
