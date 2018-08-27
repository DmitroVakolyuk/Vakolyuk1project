<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 05.07.2018
 * Time: 17:17
 */
$dayId = date('w');


switch ($dayId) {
    case 1:
        echo 'It is Monday today ' . "\n";
    case 2:
        echo 'It is Tuesday today' . "\n";
        break;
    case 3:
        echo 'It is Wednesday today' . "\n";
        break;
    case 4:
        echo 'It is Thursday today' . "\n";
        break;
    case 5:
        echo 'It is Friday today' . "\n";
        break;
    default:
        echo 'Weekend!!!' . "\n";
}

$day_name = date ('l');
$message = 'It is %s today - the %d day of a week';

switch ($dayId){
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo sprintf($message, $day_name, $dayId);
        break;
        default;
        echo 'Weekend';
}
