<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\playGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function gameTask(): array
{
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
}

function runGameGcd(): void
{
    $game = [];

    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i += 1) {
        $game[] = gameTask();
    }

    playGame(DESCRIPTION, $game);
}
