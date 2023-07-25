<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\playGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function getGcd(int $num1, int $num2): string
{
    while ($num1 !== $num2) {
        if ($num1 > $num2) {
            $num1 -= $num2;
        } else {
            $num2 -= $num1;
        }
    }

    return $num1;
}

function runGcd(): void
{
    $gameData = [];

    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i += 1) {
        $num1 = rand(1, 99);
        $num2 = rand(1, 99);

        $question = "$num1 $num2";
        $correctAnswer = getGcd($num1, $num2);

        $gameData[] = [$question, $correctAnswer];
    }

    playGame(DESCRIPTION, $gameData);
}
