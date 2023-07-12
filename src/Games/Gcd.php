<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\playGame;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function runGameGcd()
{
    $task = function () {
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
        $trueAnswer = $num1;

        $trueAnswer = (string) $trueAnswer;

        return [$question, $trueAnswer];
    };

    playGame(DESCRIPTION, $task);
}
