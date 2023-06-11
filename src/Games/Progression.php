<?php

namespace Hexlet\Code\Prog;

use function cli\line;
use function cli\prompt;
use function Hexlet\Code\Engine\greeting;
use function Hexlet\Code\Engine\playGame;

function makeTask(): array
{
    $firstNum = rand(1, 10);
    $array = [$firstNum];
    $step = rand(1, 5);
    $arraySize = rand(4, 9);

    for ($i = 0; $i < $arraySize; $i++) {
        $array[] = $array[$i] + $step;
    }

    $rndNum = rand(0, count($array) - 1);
    
    $trueAnswer = $array[$rndNum];
    
    $array[$rndNum] = '..';

    $question = implode(' ',$array);
    
    $trueAnswer = (string) $trueAnswer;
    $result = [$question, $trueAnswer];

    return $result;
}

function runGameProg()
{
    $description = 'What number is missing in the progression?';

    $name = greeting($description);

    for ($i = 0; $i < 3; $i++) {
        $task = makeTask();
        $result = playGame($name, $task);
        if ($result === true) {
            $result = 'Congratulations, ' . $name . '!';
        } else {
            $result = "Let's try again, " . $name . '!';
            break;
        }
    }

    line($result);
}