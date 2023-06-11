<?php

namespace Hexlet\Code\Prime;

use function cli\line;
use function cli\prompt;
use function Hexlet\Code\Engine\playGame;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime(int $num): bool
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function runGamePrime()
{
    $task = function () {
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
