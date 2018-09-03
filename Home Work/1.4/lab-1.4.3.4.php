<?php

/**
 * Params parser
 *
 * Author: Student Name
 * Company: BrainAcademy
 * Date: 13.07.2016
 */

$arguments = $argv;
unset($arguments[0]);

$parameters = [];
$argumentParts = array_chunk($arguments, 2);

foreach ($argumentParts as $parts) {
    $isFullParameter = substr($parts[0], 0, 2) == '--';
    $isShortParameter = substr($parts[0], 0, 1) == '-' && strlen($parts[0]) == 2;

    if ($isFullParameter || $isShortParameter) {
        $key = trim(array_shift($parts), '-');
        $parameters[$key] = array_pop($parts);
    }
}
