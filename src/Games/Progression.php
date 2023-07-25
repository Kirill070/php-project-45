<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\playGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;

const DESCRIPTION = 'What number is missing in the progression?';

function makeProgression(): array
{
    $firstNumInProgression = rand(1, 10);
    $progression = [$firstNumInProgression];
    $stepInProgression = rand(1, 5);
    $sizeOfProgression = rand(4, 9);

    for ($i = 0; $i < $sizeOfProgression; $i += 1) {
        $progression[] = $progression[$i] + $stepInProgression;
    }

    return $progression;
}

function runProgression(): void
{
    $gameData = [];

    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i += 1) {
        $progression = makeProgression();

        $rndNumInProgression = rand(0, count($progression) - 1);

        $correctAnswer = $progression[$rndNumInProgression];

        $progression[$rndNumInProgression] = '..';

        $question = implode(' ', $progression);
        $correctAnswer = (string) $correctAnswer;

        $gameData[] = [$question, $correctAnswer];
    }

    playGame(DESCRIPTION, $gameData);
}
