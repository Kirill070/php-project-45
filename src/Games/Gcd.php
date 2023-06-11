<?php

namespace Hexlet\Code\Gcd;

use function cli\line;
use function cli\prompt;
use function Hexlet\Code\Engine\greeting;
use function Hexlet\Code\Engine\playGame;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function makeTask(): array
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
    $trueAnswer = $num1;

    $trueAnswer = (string) $trueAnswer;
    $result = [$question, $trueAnswer];

    return $result;
}

function runGameGcd()
{
    $name = greeting(DESCRIPTION);

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
