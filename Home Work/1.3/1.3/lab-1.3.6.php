<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 05.07.18
 * Time: 14:26
 */


function printHelloMessage(){
    echo 'Hello! Welcome again!';
}

function printGoodBayMessage(){
    echo 'Buy! Have a nice day!';
}

function printMessage($message){
    echo $message;
}

$is_welcome = (bool)mt_rand(0, 1);

if($is_welcome){
   printHelloMessage();
} else {
    printGoodBayMessage();
}

$message = $is_welcome
    ? 'Hello! Welcome again!'
    : 'Buy! Have a nice day!';
printMessage($message);

/*

function  printHelloMessage () {
    echo 'Hello! Welcome again!';
}

function  printGoodBayMessage (){
    echo  'Buy! Have a nice day!';

}




$is_welcome = (bool)mt_rand(0, 1);


if  ($is_welcome) {
    print HelloMassage ();
}
else {
    printGoodBayMessage();
}

$message_random = $is_welcome ? 'Hello! Welcome again!': 'Buy! Have a nice day!';
printMessage ($message_random);

*/

switch($beer)
{
    case 'tuborg';
    case 'carlsberg';
    case 'heineken';
        echo 'Хороший выбор';
        break;
    default;
        echo 'Пожалуйста, сделайте новый выбор...';
        break;
}