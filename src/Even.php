<?php

namespace src\Even;

use function cli\line;
use function cli\prompt;

function isEven(int $num): string
{
    return ($num % 2 === 0) ? 'yes' : 'no';
}

function runGameEven()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');

    for ($i = 0; $i < 3; $i++) {
        $num = rand(1, 99);
        line('Question: %s', $num);
        $userAnswer = prompt('Your answer');
        $trueAnswer = isEven($num);

        if ($userAnswer === $trueAnswer) {
            line('Correct!');
            $result = 'Congratulations, ' . $name;
        } else {
            line("'" . $userAnswer . "' is wrong answer ;(. Correct answer was '" . $trueAnswer . "'");
            $result = "Let's try again, " . $name;
            break;
        }
    }
    line($result);
}
