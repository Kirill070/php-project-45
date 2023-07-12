<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\playGame;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function runGameEven(): void
{
    $task = function (): array {
        $num = rand(1, 99);

        $question = $num;

        $correctAnswer = ($num % 2 === 0) ? 'yes' : 'no';

        return [$question, $correctAnswer];
    };

    playGame(DESCRIPTION, $task);
}
