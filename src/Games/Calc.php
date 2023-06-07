<?php

namespace Hexlet\Code\Calc;

use function cli\line;
use function cli\prompt;
use function Hexlet\Code\Engine\greeting;
use function Hexlet\Code\Engine\playGame;

function makeTask(): array
{
    $num1 = rand(1, 99);
    $num2 = rand(1, 99);
    $operation = rand(1, 3);

    switch ($operation) {
        case 1:
            $question = "{$num1} + {$num2}";
            $trueAnswer = $num1 + $num2;
            break;
        case 2:
            $question = "{$num1} - {$num2}";
            $trueAnswer = $num1 - $num2;
            break;
        case 3:
            $question = "{$num1} * {$num2}";
            $trueAnswer = $num1 * $num2;
            break;
    }

    $trueAnswer = (string) $trueAnswer;
    $result = [$question, $trueAnswer];

    return $result;
}

function runGameCalc()
{
    $description = 'What is the result of the expression?';

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