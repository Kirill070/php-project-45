<?php

namespace Hexlet\Code\Even;

use function cli\line;
use function cli\prompt;
use function Hexlet\Code\Engine\playGame;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function runGameEven()
{
    $task = function () {
        $num = rand(1, 99);

        $question = $num;

        $trueAnswer = ($num % 2 === 0) ? 'yes' : 'no';

        return [$question, $trueAnswer];
    };

    playGame(DESCRIPTION, $task);
}
