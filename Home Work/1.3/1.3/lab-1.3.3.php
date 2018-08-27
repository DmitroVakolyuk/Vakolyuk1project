<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 05.07.18
 * Time: 12:15
 */


$day_id = date('w');
switch ($day_id) {
    case 1:
        echo 'It is Monday today';
        break;
    case 2:
        echo 'It is Tuesday today';
        break;
    case 3:
        echo 'It is Wednesday today';
        break;
    case 4:
        echo 'It is Thursday today';
        break;
    case 5:
        echo 'It is Friday today';
        break;
    default:
        echo 'Weekend!!!';
}

$day_name = date('1');
$message = 'It is %s today - the %d day of a week';

switch ($day_id) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo sprintf($message, $day_name, $day_id);
        break;
    default:
        echo 'Weekend!!!';
}




// почему ВИкенд у меня?

/*

$day_id = date('w');
switch ($day-id) {
    case 1:
        echo 'Monday';
        break;
    case 2:
        echo 'Tuesday';
        break;
    default:

        echo 'Weekend';


$day_name = date('1');
$massage = '1 day of the week';
switch ($day_id) {

    case 1;
    case 2;
}

echo sprintf($message, $day_name, $day_id);
break;

}

*/