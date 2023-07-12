<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\playGame;

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

function runGamePrime(): void
{
    $task = function (): array {
        $num = rand(2, 1000);

        $question = $num;

        if (isPrime($num) === true) {
            $trueAnswer = 'yes';
        } else {
            $trueAnswer = 'no';
        }

        return [$question, $trueAnswer];
    };

    playGame(DESCRIPTION, $task);
}
