<?php

namespace Hexlet\Code\Even;

use function cli\line;
use function cli\prompt;
use function Hexlet\Code\Engine\greeting;
use function Hexlet\Code\Engine\playGame;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function makeTask(): array
{
    $num = rand(1, 99);

    $question = $num;

    $trueAnswer = ($num % 2 === 0) ? 'yes' : 'no';

    $result = [$question, $trueAnswer];

    return $result;
}

function runGameEven()
{
    $name = greeting(DESCRIPTION);

    $result = 'Congratulations, ' . $name . '!';

    for ($i = 0; $i < 3; $i++) {
        $task = makeTask();
        $gameResult = playGame($name, $task);
        if ($gameResult !== true) {
            $result = "Let's try again, " . $name . '!';
            break;
        }
    }

    line($result);
}
