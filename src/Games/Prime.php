<?php

namespace Hexlet\Code\Prime;

use function cli\line;
use function cli\prompt;
use function Hexlet\Code\Engine\greeting;
use function Hexlet\Code\Engine\playGame;

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

function makeTask(): array
{
    $num = rand(2, 1000);

    $question = $num;

    if (isPrime($num) === true) {
        $trueAnswer = 'yes';
    } else {
        $trueAnswer = 'no';
    }

    $result = [$question, $trueAnswer];

    return $result;
}

function runGamePrime()
{
    $description = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $name = greeting($description);

    $result = 'Congratulations, ' . $name . '!';

    for ($i = 0; $i < 3; $i++) {
        $task = makeTask();
        $gameResult = playGame($name, $task);
        if ($gameResult !== true) {
            $result = "Let's try again, " . $name . '!';
            break;
        }
    }

    line($result);
}
