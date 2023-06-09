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

        for ($i = 0; $i < $arraySize; $i += 1) {
            $array[] = $array[$i] + $step;
        }

        $rndNum = rand(0, count($array) - 1);

        $correctAnswer = $array[$rndNum];

        $array[$rndNum] = '..';

        $question = implode(' ', $array);

        $correctAnswer = (string) $correctAnswer;

        return [$question, $correctAnswer];
    };

    playGame(DESCRIPTION, $task);
}
