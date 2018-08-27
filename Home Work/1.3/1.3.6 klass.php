<?php

/**
 * Hello message print
 *
 * Author: Student Name
 * Company: BrainAcademy
 * Date: 12.07.2016
 */

function printHelloMessage()
{
    echo 'Hello! Welcome again!';
}

function printGoodBayMessage()
{
    echo 'Buy! Have a nice day!';
}
function printMessage(){
    echo $message;
}

$is_Welcome = (bool)mt_rand(0, 1);
if ($is_Welcome) {
    printHelloMessage();
} else {
    printGoodBayMessage();
}
$message_rancom = $is_Welcome ? 'Hello! Welcome again!' : 'Buy! Have a nice day!';
printMessage($message_rancom);
