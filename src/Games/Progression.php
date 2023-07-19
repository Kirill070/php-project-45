<?php

namespace BrainGames\Games\Prog;

use function BrainGames\Engine\playGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;

const DESCRIPTION = 'What number is missing in the progression?';

function gameTask(): array
{
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
}

function runGameProg(): void
{
    $game = [];

    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i += 1) {
        $game[] = gameTask();
    }

    playGame(DESCRIPTION, $game);
}
