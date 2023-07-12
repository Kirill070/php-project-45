<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\playGame;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function runGameGcd(): void
{
    $task = function (): array {
        $num1 = rand(1, 99);
        $num2 = rand(1, 99);

        $question = "{$num1} {$num2}";
        while ($num1 !== $num2) {
            if ($num1 > $num2) {
                $num1 -= $num2;
            } else {
                $num2 -= $num1;
            }
        }
        $correctAnswer = $num1;

        $correctAnswer = (string) $correctAnswer;

        return [$question, $correctAnswer];
    };

    playGame(DESCRIPTION, $task);
}
