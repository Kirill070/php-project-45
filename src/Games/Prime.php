<?php

namespace Hexlet\Code\Prime;

use function cli\line;
use function cli\prompt;
use function Hexlet\Code\Engine\greeting;
use function Hexlet\Code\Engine\playGame;

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
    $description = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $name = greeting($description);

    for ($i = 0; $i < 3; $i++) {
        $task = makeTask();
        $result = playGame($name, $task);
        if ($result === true) {
            $result = 'Congratulations, ' . $name;
        } else {
            $result = "Let's try again, " . $name;
            break;
        }
    }

    line($result);
}