<?php

/**
 * Constants
 *
 * Author: Student Name
 * Company: BrainAcademy
 * Date: 02.07.2016
 */

echo 'Script directory rout: ' . __DIR__ . PHP_EOL;
echo 'File rout: ' .  __FILE__ . PHP_EOL;
echo 'Line number: ' .  __LINE__ . PHP_EOL;

defined( 'MY_NAME') || define('MY_NAME', 'Dmitro');
echo MY_NAME . PHP_EOL;

if (!defined('TEST')) {
    define('TEST', 'ALOHA');
}
echo TEST;
