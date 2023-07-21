<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\playGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;

const DESCRIPTION = 'What number is missing in the progression?';

function getProgression(): array
{
    $firstNum = rand(1, 10);
    $progression = [$firstNum];
    $step = rand(1, 5);
    $progressionSize = rand(4, 9);

    for ($i = 0; $i < $progressionSize; $i += 1) {
        $progression[] = $progression[$i] + $step;
    }

    return $progression;
}

function runProgression(): void
{
    $game = [];

    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i += 1) {
        $progression = getProgression();

        $rndNum = rand(0, count($progression) - 1);

        $correctAnswer = $progression[$rndNum];

        $progression[$rndNum] = '..';

        $question = implode(' ', $progression);
        $correctAnswer = (string) $correctAnswer;

        $game[] = [$question, $correctAnswer];
    }

    playGame(DESCRIPTION, $game);
}
