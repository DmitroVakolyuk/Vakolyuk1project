<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 05.07.18
 * Time: 15:10
 */

$delimiter = '---------------';
$content = 'Content string';

function drawDelimiter()
{
    global $delimiter;
    echo $delimiter . PHP_EOL;
}

$drawContentString = function () use ($content) {
    echo $content . PHP_EOL;
};


drawDelimiter();
$delimiter = '++++++++++++++';

$drawContentString();
drawDelimiter();
$content = 'by';

$drawContentString();