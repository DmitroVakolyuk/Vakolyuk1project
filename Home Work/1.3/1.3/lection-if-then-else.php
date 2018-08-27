<?php

$current_hours = date('H');

$webinar_start = 23;
$webinar_finish = 24;

$message = '';

if($current_hours < $webinar_start){
    $message = 'webinar ще не почався';
} elseif(($current_hours >= $webinar_start) && ($current_hours < $webinar_finish)) {
    $message = 'ми на вебінарі';
} else {
    $message = 'webinar уже закінчився';
}

echo $message;