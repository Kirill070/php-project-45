<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\playGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime(int $num): bool
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= $num / 2; $i += 1) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function runPrime(): void
{
    $gameData = [];

    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i += 1) {
        $num = rand(2, 1000);

        $question = $num;

        $correctAnswer = isPrime($num) ? 'yes' : 'no';

        $gameData[] = [$question, $correctAnswer];
    }
    playGame(DESCRIPTION, $gameData);
}
