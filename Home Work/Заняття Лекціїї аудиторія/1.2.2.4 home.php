<?php

/**
 * Strings oputput
 *
 * Author: Student Name
 * Company: BrainAcademy
 * Date: 24.06.2016
 */

$studentName = 'Danny K';

echo 'Simple single-quoted string with variable by $studentName' . PHP_EOL;
echo 'Single-quoted string with characters escaping by \'' . $studentName . '\'' . PHP_EOL;
echo "Simple double-quoted string with variable by {$studentName}" . PHP_EOL;
echo "Double-quoted string with escape sequences\nby '{$studentName}'" . PHP_EOL;

echo PHP_EOL;
echo <<<HEREDOC
There is HereDoc syntax
in PHP learning course
by "{$studentName}"
HEREDOC;

echo PHP_EOL . PHP_EOL;
echo <<<'NOWDOC'
There is NowDoc syntax
in PHP learning course
by "{$studentName}"
NOWDOC;


