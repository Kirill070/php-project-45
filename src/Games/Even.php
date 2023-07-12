<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\playGame;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven(int $num): bool
{
    return ($num % 2 === 0);
}

function runGameEven(): void
{
    $task = function (): array {
        $num = rand(1, 99);

        $question = $num;

        $correctAnswer = (isEven($num)) ? 'yes' : 'no';

        return [$question, $correctAnswer];
    };

    playGame(DESCRIPTION, $task);
}
