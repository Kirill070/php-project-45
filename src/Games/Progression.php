<?php

namespace BrainGames\Games\Prog;

use function BrainGames\Engine\playGame;

const DESCRIPTION = 'What number is missing in the progression?';

function runGameProg(): void
{
    $task = function (): array {
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

        $question = implode(' ', $array);

        $trueAnswer = (string) $trueAnswer;

        return [$question, $trueAnswer];
    };

    playGame(DESCRIPTION, $task);
}
