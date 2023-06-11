<?php

namespace Hexlet\Code\Even;

use function cli\line;
use function cli\prompt;
use function Hexlet\Code\Engine\greeting;
use function Hexlet\Code\Engine\playGame;

function makeTask(): array
{
    $num = rand(1, 99);

    $question = $num;

    $trueAnswer = ($num % 2 === 0) ? 'yes' : 'no';

    $trueAnswer = (string) $trueAnswer;
    $result = [$question, $trueAnswer];

    return $result;
}

function runGameEven()
{
    $description = 'Answer "yes" if the number is even, otherwise answer "no".';

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
